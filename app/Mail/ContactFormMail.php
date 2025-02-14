<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->view('emails.contact-form')
        ->subject('New Project Inquiry - ' . $this->contactData['service_type'])
        ->attach(Storage::disk('public')->path($this->contactData['floor_design']));
    }
}