<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class salesReports extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        protected $seller,
        protected $sales,
        protected $amount
    )
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('levelup@gmail.com', 'Level Up'),
            subject: '[Relatório de vendas] - '.date('d/m/Y'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mails.salesReports',
            with: [
                'seller' => $this->seller,
                'sales' => $this->sales,
                'amount' => $this->amount
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}