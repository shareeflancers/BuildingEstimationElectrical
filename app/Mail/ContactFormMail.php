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
        $mail = $this->view('emails.contact-form')
        ->subject('New Project Inquiry' . 
            (isset($this->contactData['service_type']) ? ' - ' . $this->contactData['service_type'] : ''));

        // Only attach file if floor_design exists in contact data
        if (isset($this->contactData['floor_design'])) {
            $mail->attach(Storage::disk('public')->path($this->contactData['floor_design']));
        }

        return $mail;
    }
}