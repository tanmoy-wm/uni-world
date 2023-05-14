<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UniversityWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public $university, public $password)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'University Welcome Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.university-welcome-mail',
            with: [
                'university' => $this->university,
                'password' => $this->password,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
