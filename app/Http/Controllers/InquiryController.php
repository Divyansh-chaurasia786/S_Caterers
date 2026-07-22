<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Store a new catering inquiry in MySQL database.
     */
    public function store(Request $request)
    {
        if ($request->has('name') && !$request->has('client_name')) {
            $request->merge(['client_name' => $request->input('name')]);
        }
        if ($request->has('email') && !$request->has('client_email')) {
            $request->merge(['client_email' => $request->input('email')]);
        }
        if ($request->has('service_package') && !$request->has('selected_service')) {
            $request->merge(['selected_service' => $request->input('service_package')]);
        }

        $validated = $request->validate([
            'selected_service' => 'required|string|max:255',
            'client_name'      => 'required|string|max:255',
            'client_email'     => 'required|email|max:255',
            'event_date'       => 'required|string|max:100',
            'guest_count'      => 'nullable|integer',
            'estimated_total'  => 'nullable|numeric',
            'notes'            => 'nullable|string|max:2000',
        ]);

        $inquiry = Inquiry::create([
            'selected_service' => $validated['selected_service'],
            'client_name'      => $validated['client_name'],
            'client_email'     => $validated['client_email'],
            'event_date'       => $validated['event_date'],
            'guest_count'      => $validated['guest_count'] ?? 50,
            'estimated_total'  => $validated['estimated_total'] ?? 0,
            'notes'            => $validated['notes'] ?? '',
            'status'           => 'pending',
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => '✨ Thank you! Your catering inquiry has been stored in MySQL database. We will contact you within 2 hours.',
                'inquiry_id' => $inquiry->id,
            ]);
        }

        return redirect()->back()->with('success', 'Your inquiry has been submitted successfully!');
    }
}
