<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

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

        Inquiry::create($validated);

        return redirect()->back()->with('success', 'Thank you! Your catering consultation request has been submitted successfully. Amit Agrawal and team will contact you shortly.');
    }
}
