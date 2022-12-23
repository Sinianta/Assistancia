<?php

namespace App\Mail;

use App\Models\Demandes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $demandes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Demandes $demande)
    {
        $this->demandes = $demande;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.client-email')
        ->subject("Demande- ".$this->demandes->titre." - Achevée");
    }
}
