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
      'service_type' => 'nullable|string|in:Estimation,Engineering',
      'message' => 'required|string',
      'floor_design' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
    ]);

    // Initialize filePath as null
    $filePath = null;

    // Only attempt to store the file if it was actually uploaded
    if ($request->hasFile('floor_design') && $request->file('floor_design')->isValid()) {
      $filePath = $request->file('floor_design')->store('floor-designs', 'public');
    }

    // Create email data array with only validated fields
    $emailData = [
      'name' => $validated['name'],
      'email' => $validated['email'],
      'message' => $validated['message'],
      'service_type' => $validated['service_type'] ?? null,
    ];

    // Only add floor_design to email data if we actually stored a file
    if ($filePath) {
      $emailData['floor_design'] = $filePath;
    }

    // Send email
    Mail::to('Buildingestimation.electrical@gmail.com')->send(new ContactFormMail($emailData));

    return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
  }
}