<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Contact;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'event_date' => 'required|date',
            'guests' => 'required|integer|min:1',
            'package' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ]);

        Inquiry::create(array_merge($validated, [
            'notes' => $request->has('addons') 
                ? "Add-on Services Selected: " . implode(', ', $request->input('addons')) . ($validated['notes'] ? "\n" . $validated['notes'] : '')
                : $validated['notes']
        ]));

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Consultation request saved.']);
        }

        return redirect()->back()->with('success', 'Thank you! Your catering consultation request has been submitted successfully. Amit Agarwal and team will contact you shortly.');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        $images = GalleryImage::latest()->get();
        $categories = GalleryImage::pluck('category')->unique()->filter()->values();
        return view('gallery', compact('images', 'categories'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Contact::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Your message has been saved successfully.']);
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully. Amit Agarwal and team will contact you shortly.');
    }

    public function adminGallery()
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('home')->with('error', 'Access Denied.');
        }

        list($images, $categories) = $this->ensureDatabaseAndFetchImages();
        return view('admin.gallery', compact('images', 'categories'));
    }

    private function ensureDatabaseAndFetchImages()
    {
        try {
            $images = GalleryImage::orderBy('id', 'desc')->get();
            $categories = GalleryImage::pluck('category')->unique()->filter()->values();
            return [$images, $categories];
        } catch (\Throwable $e) {
            try {
                if (!\Illuminate\Support\Facades\Schema::hasTable('gallery_images')) {
                    \Illuminate\Support\Facades\Schema::create('gallery_images', function ($table) {
                        $table->id();
                        $table->string('title');
                        $table->string('category');
                        $table->string('path');
                        $table->boolean('is_video')->default(false);
                        $table->boolean('is_local')->default(false);
                        $table->timestamps();
                    });
                }
                $images = GalleryImage::orderBy('id', 'desc')->get();
                $categories = GalleryImage::pluck('category')->unique()->filter()->values();
                return [$images, $categories];
            } catch (\Throwable $e2) {
                return [collect([]), collect([])];
            }
        }
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        if (in_array($request->password, ['scatrers@1998', 'scaterers@1998'])) {
            session(['admin_authenticated' => true]);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Invalid Password. Please try again.'], 401);
    }

    public function adminUpload(Request $request)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('home')->with('error', 'Access Denied.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,mp4,mov,webm,ogg,mkv,avi|max:51200',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,mp4,mov,webm,ogg,mkv,avi|max:51200',
        ]);

        $uploadedFile = $request->file('file') ?? $request->file('image');

        if (!$uploadedFile) {
            return redirect()->back()->with('error', 'Please select an image or video file to upload.');
        }

        // Storage Quota Limit Protection (Max 65 total items / 45MB quota)
        $totalItemsCount = GalleryImage::count();
        if ($totalItemsCount >= 65) {
            return redirect()->back()->with('error', 'Upload limit reached! Gallery storage quota full. Please delete older photos or videos to upload new media.');
        }

        $extension = strtolower($uploadedFile->getClientOriginalExtension());
        $isVideo = in_array($extension, ['mp4', 'mov', 'webm', 'ogg', 'mkv', 'avi']);
        $filename = time() . '_' . uniqid() . '.' . $extension;
        
        $targetDir = $isVideo ? public_path('videos/gallery') : public_path('images/gallery');
        File::ensureDirectoryExists($targetDir);
        
        $uploadedFile->move($targetDir, $filename);

        $relativePath = ($isVideo ? 'videos/gallery/' : 'images/gallery/') . $filename;

        GalleryImage::create([
            'title' => $request->title,
            'category' => $request->category,
            'path' => $relativePath,
            'is_local' => true,
            'media_type' => $isVideo ? 'video' : 'image',
        ]);

        $typeLabel = $isVideo ? 'Video' : 'Photo';
        return redirect()->route('admin.gallery')->with('success', "{$typeLabel} uploaded successfully!");
    }

    public function adminDelete($id)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('home')->with('error', 'Access Denied.');
        }

        try {
            $image = GalleryImage::find($id);

            if (!$image) {
                return redirect()->route('admin.gallery')->with('error', 'Photo not found or already deleted.');
            }

            // Delete local file if it exists
            if ($image->is_local && File::exists(public_path($image->path))) {
                @File::delete(public_path($image->path));
            }

            $image->delete();

            return redirect()->route('admin.gallery')->with('success', 'Image deleted successfully!');
        } catch (\Exception $e) {
            \Log::error('Delete Gallery Image Error: ' . $e->getMessage());
            return redirect()->route('admin.gallery')->with('error', 'Could not delete photo: ' . $e->getMessage());
        }
    }

    public function adminUpdate(Request $request, $id)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('home')->with('error', 'Access Denied.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        try {
            $image = GalleryImage::find($id);

            if (!$image) {
                return redirect()->route('admin.gallery')->with('error', 'Media item not found.');
            }

            $image->update([
                'title' => $request->title,
                'category' => $request->category,
            ]);

            return redirect()->route('admin.gallery')->with('success', 'Media details updated successfully!');
        } catch (\Exception $e) {
            \Log::error('Update Gallery Image Error: ' . $e->getMessage());
            return redirect()->route('admin.gallery')->with('error', 'Could not update item details: ' . $e->getMessage());
        }
    }

    public function adminLogout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('home')->with('success', 'Logged out of admin panel.');
    }
}
