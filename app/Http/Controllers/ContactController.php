<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'service_type' => 'required|in:Estimation,Engineering',
          'message' => 'required|string',
        ]);

        // Store the file
        $filePath = $request->file('floor_design')->store('floor-designs', 'public');

        // Send email
        Mail::to('shareeflancer2000@gmail.com')->send(new ContactFormMail([
          'name' => $validated['name'],
          'email' => $validated['email'],
          'service_type' => $validated['service_type'],
          'message' => $validated['message'],
          'floor_design' => $filePath,
        ]));
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}