<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use App\Models\Contact;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\File;
use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;

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
        // On Vercel (array session driver), use cookie-based auth
        $authenticated = $this->isAdminAuthenticated(request());

        if (!$authenticated) {
            return view('admin.gallery', [
                'images'       => collect([]),
                'categories'   => collect([]),
                'showLoginModal' => true,
                'storageStats' => ['used_mb' => 0, 'total_mb' => 25600, 'percent' => 0, 'cloudinary_count' => 0, 'local_count' => 0],
            ]);
        }

        list($images, $categories) = $this->ensureDatabaseAndFetchImages();

        // ── Storage Stats ──────────────────────────────────────────────
        $cloudinaryCount = $images->filter(fn($i) => !empty($i->cloudinary_id))->count();
        $localCount      = $images->filter(fn($i) =>  empty($i->cloudinary_id))->count();

        // Estimate local storage (scan public folder)
        $localUsedBytes = 0;
        $localDirs = ['images/gallery', 'videos/gallery', 'storage/gallery'];
        foreach ($localDirs as $dir) {
            $fullPath = public_path($dir);
            if (is_dir($fullPath)) {
                foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($fullPath, \FilesystemIterator::SKIP_DOTS)) as $file) {
                    $localUsedBytes += $file->getSize();
                }
            }
        }
        $localUsedMb = round($localUsedBytes / 1048576, 2);

        // Cloudinary free tier = 25 GB. Estimate ~3 MB avg per Cloudinary asset.
        $cloudinaryEstMb = $cloudinaryCount * 3;
        $totalUsedMb     = round($localUsedMb + $cloudinaryEstMb, 2);
        $totalMb         = 25600; // 25 GB in MB
        $percent         = min(100, round(($totalUsedMb / $totalMb) * 100, 1));

        $storageStats = [
            'used_mb'          => $totalUsedMb,
            'total_mb'         => $totalMb,
            'percent'          => $percent,
            'cloudinary_count' => $cloudinaryCount,
            'local_count'      => $localCount,
        ];
        // ───────────────────────────────────────────────────────────────

        return view('admin.gallery', compact('images', 'categories', 'storageStats'));
    }

    private function isAdminAuthenticated($request)
    {
        // First check regular session
        if (session('admin_authenticated')) {
            return true;
        }
        // Check signed cookie for Vercel (array session doesn't persist)
        $cookie = $request->cookie('admin_auth');
        if ($cookie) {
            $expected = hash_hmac('sha256', 'admin_authenticated', config('app.key'));
            if (hash_equals($expected, $cookie)) {
                return true;
            }
        }
        return false;
    }

    private function ensureTableExists()
    {
        try {
            if (!\Illuminate\Support\Facades\Schema::hasTable('gallery_images')) {
                \Illuminate\Support\Facades\Schema::create('gallery_images', function ($table) {
                    $table->id();
                    $table->string('title');
                    $table->string('category');
                    $table->string('path');
                    $table->string('cloudinary_id')->nullable();
                    $table->boolean('is_video')->default(false);
                    $table->boolean('is_local')->default(false);
                    $table->timestamps();
                });
            } elseif (!\Illuminate\Support\Facades\Schema::hasColumn('gallery_images', 'cloudinary_id')) {
                try {
                    \Illuminate\Support\Facades\Schema::table('gallery_images', function ($table) {
                        $table->string('cloudinary_id')->nullable();
                    });
                } catch (\Throwable $ex) {}
            }
        } catch (\Throwable $e) {}
    }

    private function fetchMediaFromCloudinary()
    {
        $cloudName = env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj');
        $apiKey    = env('CLOUDINARY_API_KEY', '499981468335259');
        $apiSecret = env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0');

        $url = "https://api.cloudinary.com/v1_1/{$cloudName}/resources/search";
        $payload = json_encode([
            'expression'  => 'folder:s-caterers-gallery*',
            'sort_by'     => [['created_at' => 'desc']],
            'max_results' => 500,
            'with_field'  => ['context', 'tags']
        ]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, "{$apiKey}:{$apiSecret}");
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $items = collect([]);
        if ($httpCode === 200 && $response) {
            $json = json_decode($response, true);
            if (!empty($json['resources'])) {
                foreach ($json['resources'] as $res) {
                    $isVideo = ($res['resource_type'] === 'video');
                    $url = $res['secure_url'];
                    if ($isVideo) {
                        $url = preg_replace('/\.[a-z0-9]+$/i', '.mp4', $url);
                    }

                    $rawTitle = $res['context']['custom']['title'] ?? ($res['context']['title'] ?? ($res['display_name'] ?? ($res['filename'] ?? null)));
                    if ($rawTitle) {
                        $title = str_replace(['_', '-'], ' ', pathinfo(urldecode($rawTitle), PATHINFO_FILENAME));
                        $title = ucwords($title);
                    } else {
                        $title = 'S. Caterers ' . ($isVideo ? 'Video' : 'Photo');
                    }

                    $rawCategory = $res['context']['custom']['category'] ?? ($res['context']['category'] ?? (!empty($res['tags'][0]) ? $res['tags'][0] : null));
                    $category = $rawCategory ? urldecode($rawCategory) : ($isVideo ? 'Event Videos' : 'Event Photos');

                    $imgModel = new \App\Models\GalleryImage();
                    $imgModel->forceFill([
                        'id'            => $res['public_id'],
                        'title'         => $title,
                        'category'      => $category,
                        'path'          => $url,
                        'cloudinary_id' => $res['public_id'],
                        'is_video'      => $isVideo,
                        'is_local'      => false,
                        'created_at'    => \Carbon\Carbon::parse($res['created_at']),
                        'updated_at'    => \Carbon\Carbon::parse($res['created_at']),
                    ]);
                    $items->push($imgModel);
                }
            }
        }
        return $items;
    }

    private function ensureDatabaseAndFetchImages()
    {
        // 1. Fetch Cloudinary API resources
        $cloudImages = $this->fetchMediaFromCloudinary();

        // 2. Fetch local database records
        $dbImages = collect([]);
        try {
            $this->ensureTableExists();
            $dbImages = GalleryImage::orderBy('id', 'desc')->get();
        } catch (\Throwable $e) {}

        // 3. Merge: Prioritize admin titles and categories from Database records
        $allImages = collect($cloudImages->all());
        if ($dbImages->isNotEmpty()) {
            $dbByCloudId = $dbImages->whereNotNull('cloudinary_id')->keyBy('cloudinary_id');
            $dbById      = $dbImages->keyBy('id');

            foreach ($allImages as $cImg) {
                $cId = $cImg->cloudinary_id;
                $dbRecord = $dbByCloudId->get($cId) ?? $dbById->get($cId);
                if ($dbRecord) {
                    if (!empty($dbRecord->title) && !str_starts_with($dbRecord->title, 'S. Caterers Photo')) {
                        $cImg->title = $dbRecord->title;
                    }
                    if (!empty($dbRecord->category)) {
                        $cImg->category = $dbRecord->category;
                    }
                }
            }

            $cloudIds = $cloudImages->pluck('cloudinary_id')->filter()->toArray();
            foreach ($dbImages as $dbImg) {
                if (!empty($dbImg->cloudinary_id) && in_array($dbImg->cloudinary_id, $cloudIds)) {
                    continue;
                }
                $allImages->push($dbImg);
            }
        }

        $allImages = $allImages->sortByDesc('created_at')->values();
        $categories = $allImages->pluck('category')->unique()->filter()->values();

        return [$allImages, $categories];
    }

    public function getCloudinarySignature(Request $request)
    {
        if (!$this->isAdminAuthenticated($request)) {
            return response()->json(['success' => false, 'message' => 'Access Denied.'], 403);
        }

        $cloudName = env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj');
        $apiKey    = env('CLOUDINARY_API_KEY', '499981468335259');
        $apiSecret = env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0');

        $timestamp = time();
        $folder    = 's-caterers-gallery';

        $paramsToSign = "folder={$folder}&timestamp={$timestamp}";
        $signature    = sha1($paramsToSign . $apiSecret);

        return response()->json([
            'success'    => true,
            'cloud_name' => $cloudName,
            'api_key'    => $apiKey,
            'timestamp'  => $timestamp,
            'folder'     => $folder,
            'signature'  => $signature,
        ]);
    }

    public function saveCloudinaryMedia(Request $request)
    {
        if (!$this->isAdminAuthenticated($request)) {
            return response()->json(['success' => false, 'message' => 'Access Denied. Please login.'], 403);
        }

        try {
            $request->validate([
                'title'         => 'required|string|max:255',
                'category'      => 'required|string|max:255',
                'path'          => 'required|string',
                'cloudinary_id' => 'nullable|string',
                'is_video'      => 'nullable',
            ]);

            $isVideo = !empty($request->is_video) && ($request->is_video == 1 || $request->is_video === 'true' || $request->is_video === true);
            $path    = $request->path;

            if ($isVideo) {
                $path = preg_replace('/\.[a-z0-9]+$/i', '.mp4', $path);
            } else {
                if (!str_contains($path, 'q_auto')) {
                    $path = preg_replace('#(/upload/)#', '$1q_auto,f_auto,w_1200,c_limit/', $path, 1);
                }
            }

            $cId = $request->cloudinary_id;

            // 1. Direct Cloudinary API Context Metadata Save
            if (!empty($cId)) {
                $cloudName = env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj');
                $apiKey    = env('CLOUDINARY_API_KEY', '499981468335259');
                $apiSecret = env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0');

                $resType = $isVideo ? 'video' : 'image';
                $contextUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/resources/{$resType}/upload/context";
                $contextStr = "title=" . rawurlencode($request->title) . "|category=" . rawurlencode($request->category);

                $ch = curl_init($contextUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_USERPWD, "{$apiKey}:{$apiSecret}");
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                    'public_ids' => [$cId],
                    'context'    => $contextStr,
                ]));
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                curl_exec($ch);
                curl_close($ch);
            }

            // 2. Non-blocking SQLite write attempt (if SQLite locks, Cloudinary save ALREADY succeeded!)
            try {
                $this->ensureTableExists();
                GalleryImage::create([
                    'title'         => $request->title,
                    'category'      => $request->category,
                    'path'          => $path,
                    'cloudinary_id' => $cId ?? ('sc_' . time()),
                    'is_video'      => $isVideo ? 1 : 0,
                    'is_local'      => false,
                ]);
            } catch (\Throwable $dbEx) {
                \Log::info('SQLite lock ignored, saved directly to Cloudinary: ' . $dbEx->getMessage());
            }

            $typeLabel = $isVideo ? 'Video' : 'Photo';
            return response()->json([
                'success' => true,
                'message' => "{$typeLabel} uploaded & saved directly to Cloudinary!",
            ]);

        } catch (\Throwable $e) {
            \Log::error('Save Cloudinary Media Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error saving media: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function adminUpload(Request $request)
    {
        if (!$this->isAdminAuthenticated($request)) {
            return response()->json(['success' => false, 'message' => 'Access Denied. Please login first.'], 403);
        }

        $request->validate([
            'title'    => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'file'     => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,mp4,mov,webm,ogg,mkv,avi|max:102400',
            'image'    => 'nullable|file|mimes:jpeg,png,jpg,gif,webp,mp4,mov,webm,ogg,mkv,avi|max:102400',
        ]);

        $uploadedFile = $request->file('file') ?? $request->file('image');

        if (!$uploadedFile) {
            return redirect()->back()->with('error', 'Please select an image or video file to upload.');
        }

        // ── Backend 24.9 GB Storage Quota Guard ────────────────────────
        list($allImages) = $this->ensureDatabaseAndFetchImages();
        $cloudinaryCount = $allImages->filter(fn($i) => !empty($i->cloudinary_id))->count();
        $localUsedBytes = 0;
        foreach (['images/gallery', 'videos/gallery', 'storage/gallery'] as $dir) {
            $fullPath = public_path($dir);
            if (is_dir($fullPath)) {
                foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($fullPath, \FilesystemIterator::SKIP_DOTS)) as $file) {
                    $localUsedBytes += $file->getSize();
                }
            }
        }
        $usedMb = ($localUsedBytes / 1048576) + ($cloudinaryCount * 3);
        if ($usedMb >= 24900) {
            return redirect()->route('admin.gallery')->with('error', 'Storage quota limit reached (24.9 GB). Please delete older media assets to free up space before uploading.');
        }
        // ───────────────────────────────────────────────────────────────

        $extension = strtolower($uploadedFile->getClientOriginalExtension());
        $isVideo   = in_array($extension, ['mp4', 'mov', 'webm', 'ogg', 'mkv', 'avi']);

        try {
            // Configure Cloudinary
            $cloudinary = new Cloudinary(
                Configuration::instance([
                    'cloud' => [
                        'cloud_name' => env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj'),
                        'api_key'    => env('CLOUDINARY_API_KEY', '499981468335259'),
                        'api_secret' => env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0'),
                    ],
                    'url' => ['secure' => true],
                ])
            );

            $resourceType = $isVideo ? 'video' : 'image';
            $folder       = 's-caterers-gallery';

            // Build upload options with auto-compression
            $uploadOptions = [
                'folder'        => $folder,
                'resource_type' => $resourceType,
                'public_id'     => 'sc_' . time() . '_' . uniqid(),
                'overwrite'     => false,
            ];

            if ($isVideo) {
                // Videos: quality compression only — keep original format (mp4/mov)
                // Do NOT use fetch_format:auto or vc:auto as they cause WebM to be served
                // under an .mp4 URL which breaks browser playback
                $uploadOptions['transformation'] = [
                    ['quality' => 'auto'],
                ];
                $uploadOptions['eager_async'] = true;
            } else {
                // Images: auto quality, auto format (WebP/AVIF), cap at 1920px wide
                $uploadOptions['transformation'] = [
                    ['quality' => 'auto', 'fetch_format' => 'auto',
                     'width' => 1920, 'crop' => 'limit'],
                ];
                $uploadOptions['eager'] = [
                    ['quality' => 'auto:good', 'fetch_format' => 'auto',
                     'width' => 1200, 'crop' => 'limit'],
                ];
                $uploadOptions['eager_async'] = true;
            }

            // Upload to Cloudinary with compression
            $result = $cloudinary->uploadApi()->upload(
                $uploadedFile->getRealPath(),
                $uploadOptions
            );

            $rawUrl = $result['secure_url'] ?? '';

            if ($isVideo) {
                // Ensure Cloudinary delivers universal H.264 MP4 video playable on all devices/browsers
                $optimizedUrl = preg_replace('/\.[a-z0-9]+$/i', '.mp4', $rawUrl);
            } else {
                $optimizedUrl = preg_replace(
                    '#(/upload/)#',
                    '$1q_auto,f_auto,w_1200,c_limit/',
                    $rawUrl,
                    1
                );
            }

            $cloudinaryPublicId = $result['public_id'];

            GalleryImage::create([
                'title'         => $request->title,
                'category'      => $request->category,
                'path'          => $optimizedUrl,  // Store optimized URL directly
                'cloudinary_id' => $cloudinaryPublicId,
                'is_video'      => $isVideo,
                'is_local'      => false,
            ]);

            $typeLabel = $isVideo ? 'Video' : 'Photo';
            $msg = "{$typeLabel} uploaded successfully to cloud storage!";
            if ($request->ajax() || $request->wantsJson() || $request->header('X-Requested-With') === 'XMLHttpRequest') {
                return response()->json(['success' => true, 'message' => $msg]);
            }
            return redirect()->route('admin.gallery')->with('success', $msg);

        } catch (\Throwable $e) {
            \Log::error('Cloudinary Upload Error: ' . $e->getMessage());
            $errMsg = 'Upload failed: ' . $e->getMessage();
            if ($request->ajax() || $request->wantsJson() || $request->header('X-Requested-With') === 'XMLHttpRequest') {
                return response()->json(['success' => false, 'message' => $errMsg], 500);
            }
            return redirect()->back()->with('error', $errMsg);
        }
    }

    public function adminDelete($id)
    {
        if (!$this->isAdminAuthenticated(request())) {
            return redirect()->route('admin.gallery')->with('error', 'Access Denied. Please login first.');
        }

        try {
            $cloudName = env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj');
            $apiKey    = env('CLOUDINARY_API_KEY', '499981468335259');
            $apiSecret = env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0');

            $cId = request('cloudinary_id') ?? $id;

            if (is_numeric($id)) {
                try {
                    $image = GalleryImage::find($id);
                    if ($image) {
                        $cId = $image->cloudinary_id ?? $image->id;
                        if ($image->is_local && File::exists(public_path($image->path))) {
                            @File::delete(public_path($image->path));
                        }
                        $image->delete();
                    }
                } catch (\Throwable $ex) {}
            }

            if (!empty($cId)) {
                foreach (['image', 'video'] as $resType) {
                    $destroyUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/{$resType}/destroy";
                    $timestamp  = time();
                    $signature  = sha1("public_id={$cId}&timestamp={$timestamp}" . $apiSecret);

                    $ch = curl_init($destroyUrl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                        'public_id' => $cId,
                        'api_key'   => $apiKey,
                        'timestamp' => $timestamp,
                        'signature' => $signature,
                    ]));
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                    curl_exec($ch);
                    curl_close($ch);
                }
            }

            return redirect()->route('admin.gallery')->with('success', 'Media item deleted successfully!');
        } catch (\Throwable $e) {
            \Log::error('Delete Gallery Image Error: ' . $e->getMessage());
            return redirect()->route('admin.gallery')->with('error', 'Could not delete media: ' . $e->getMessage());
        }
    }

    public function adminBulkDelete(Request $request)
    {
        if (!$this->isAdminAuthenticated($request)) {
            return response()->json(['success' => false, 'message' => 'Access Denied.'], 403);
        }

        try {
            $ids = $request->input('ids', []);
            $deleteAll = $request->boolean('delete_all');

            $cloudName = env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj');
            $apiKey    = env('CLOUDINARY_API_KEY', '499981468335259');
            $apiSecret = env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0');

            if ($deleteAll) {
                list($allMedia) = $this->ensureDatabaseAndFetchImages();
                $ids = $allMedia->pluck('cloudinary_id')->filter()->toArray();
            }

            if (empty($ids)) {
                return response()->json(['success' => false, 'message' => 'No media items selected for deletion.']);
            }

            $deletedCount = 0;
            foreach ($ids as $cId) {
                if (empty($cId)) continue;

                // Delete from Cloudinary API
                foreach (['image', 'video'] as $resType) {
                    $destroyUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/{$resType}/destroy";
                    $timestamp  = time();
                    $signature  = sha1("public_id={$cId}&timestamp={$timestamp}" . $apiSecret);

                    $ch = curl_init($destroyUrl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                        'public_id' => $cId,
                        'api_key'   => $apiKey,
                        'timestamp' => $timestamp,
                        'signature' => $signature,
                    ]));
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                    curl_exec($ch);
                    curl_close($ch);
                }

                // Delete local SQLite record if present
                try {
                    GalleryImage::where('cloudinary_id', $cId)->orWhere('id', $cId)->delete();
                } catch (\Throwable $e) {}

                $deletedCount++;
            }

            return response()->json([
                'success' => true,
                'message' => "Successfully deleted {$deletedCount} media items!",
            ]);

        } catch (\Throwable $e) {
            \Log::error('Bulk Delete Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Bulk delete error: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function adminUpdate(Request $request, $id)
    {
        if (!$this->isAdminAuthenticated($request)) {
            return redirect()->route('admin.gallery')->with('error', 'Access Denied. Please login first.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        try {
            $cloudName = env('CLOUDINARY_CLOUD_NAME', 'dbmyeqafj');
            $apiKey    = env('CLOUDINARY_API_KEY', '499981468335259');
            $apiSecret = env('CLOUDINARY_API_SECRET', 'XkCkx8xN3cm2p4ceZgYw0xXWEl0');

            $cId = request('cloudinary_id') ?? $id;

            // 1. Update Cloudinary Context Metadata Directly
            if (!empty($cId)) {
                foreach (['image', 'video'] as $resType) {
                    $contextUrl = "https://api.cloudinary.com/v1_1/{$cloudName}/resources/{$resType}/upload/context";
                    $contextStr = "title=" . rawurlencode($request->title) . "|category=" . rawurlencode($request->category);

                    $ch = curl_init($contextUrl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_USERPWD, "{$apiKey}:{$apiSecret}");
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                        'public_ids' => [$cId],
                        'context'    => $contextStr,
                    ]));
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                    curl_exec($ch);
                    curl_close($ch);
                }
            }

            // 2. Update Database Record
            try {
                $this->ensureTableExists();
                $image = GalleryImage::where('cloudinary_id', $cId)->orWhere('id', $id)->first();
                if ($image) {
                    $image->update([
                        'title' => $request->title,
                        'category' => $request->category,
                    ]);
                } else {
                    GalleryImage::create([
                        'title' => $request->title,
                        'category' => $request->category,
                        'path' => $request->path ?? '',
                        'cloudinary_id' => $cId,
                    ]);
                }
            } catch (\Throwable $dbEx) {}

            return redirect()->route('admin.gallery')->with('success', 'Media details updated successfully!');
        } catch (\Exception $e) {
            \Log::error('Update Gallery Image Error: ' . $e->getMessage());
            return redirect()->route('admin.gallery')->with('error', 'Could not update item details: ' . $e->getMessage());
        }
    }

    public function exportDatabaseBackup(Request $request)
    {
        if (!$this->isAdminAuthenticated($request)) {
            return redirect()->route('admin.gallery')->with('error', 'Access Denied. Please login first.');
        }

        list($images) = $this->ensureDatabaseAndFetchImages();

        $format = $request->get('format', 'sql'); // sql or json
        $timestamp = date('Y-m-d_H-i-s');

        if ($format === 'json') {
            $filename = "s_caterers_gallery_backup_{$timestamp}.json";
            $content  = json_encode($images, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            return response($content, 200, [
                'Content-Type'        => 'application/json',
                'Content-Disposition' => "attachment; filename=\"{$filename}\"",
            ]);
        }

        // Default: Export clean MySQL-compatible SQL dump file for Hostinger phpMyAdmin
        $filename = "s_caterers_gallery_backup_{$timestamp}.sql";
        $sql  = "-- S. Caterers Gallery Database Backup\n";
        $sql .= "-- Exported on: " . date('Y-m-d H:i:s') . "\n";
        $sql .= "-- Total Items: " . count($images) . "\n\n";

        $sql .= "DROP TABLE IF EXISTS `gallery_images`;\n";
        $sql .= "CREATE TABLE `gallery_images` (\n";
        $sql .= "  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,\n";
        $sql .= "  `title` varchar(255) NOT NULL,\n";
        $sql .= "  `category` varchar(255) NOT NULL,\n";
        $sql .= "  `path` text NOT NULL,\n";
        $sql .= "  `cloudinary_id` varchar(255) DEFAULT NULL,\n";
        $sql .= "  `is_video` tinyint(1) NOT NULL DEFAULT '0',\n";
        $sql .= "  `is_local` tinyint(1) NOT NULL DEFAULT '0',\n";
        $sql .= "  `created_at` timestamp NULL DEFAULT NULL,\n";
        $sql .= "  `updated_at` timestamp NULL DEFAULT NULL,\n";
        $sql .= "  PRIMARY KEY (`id`)\n";
        $sql .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";

        if (count($images) > 0) {
            $sql .= "INSERT INTO `gallery_images` (`id`, `title`, `category`, `path`, `cloudinary_id`, `is_video`, `is_local`, `created_at`, `updated_at`) VALUES\n";
            $rows = [];
            foreach ($images as $img) {
                $id       = (int) $img->id;
                $title    = addslashes($img->title);
                $category = addslashes($img->category);
                $path     = addslashes($img->path);
                $cId      = !empty($img->cloudinary_id) ? "'" . addslashes($img->cloudinary_id) . "'" : "NULL";
                $isVideo  = $img->is_video ? 1 : 0;
                $isLocal  = $img->is_local ? 1 : 0;
                $createdAt= $img->created_at ? "'" . $img->created_at->format('Y-m-d H:i:s') . "'" : "NULL";
                $updatedAt= $img->updated_at ? "'" . $img->updated_at->format('Y-m-d H:i:s') . "'" : "NULL";

                $rows[] = "({$id}, '{$title}', '{$category}', '{$path}', {$cId}, {$isVideo}, {$isLocal}, {$createdAt}, {$updatedAt})";
            }
            $sql .= implode(",\n", $rows) . ";\n";
        }

        return response($sql, 200, [
            'Content-Type'        => 'application/sql',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }

    public function adminLogout()
    {
        session()->forget('admin_authenticated');
        // Also clear the auth cookie
        $cookie = cookie()->forget('admin_auth');
        return redirect()->route('home')->with('success', 'Logged out of admin panel.')->cookie($cookie);
    }
}
