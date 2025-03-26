<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $content;
    public $fromAddress;

    /**
     * Create a new message instance.
     */
    public function __construct($fromAddress, $title, $content)
    {
        $this->fromAddress = $fromAddress;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->fromAddress, 'Labbah'),
            subject: $this->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content 
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'title' => $this->title,
                'content' => $this->content,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
