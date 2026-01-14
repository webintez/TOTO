<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        \App\Models\Contact::create($validated);

        // Send email to admin
        // Ideally fetch this email from Settings, but defaulting to a fixed email for now
        \Illuminate\Support\Facades\Mail::to('info@lordsmobility.com')->send(new \App\Mail\ContactFormSubmitted($validated));

        return back()->with('success', 'Thank you for contacting us! We will get back to you shortly.');
    }
}
