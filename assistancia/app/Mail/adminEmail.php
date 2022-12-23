<?php

namespace App\Mail;

use App\Models\Demandes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class adminEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $demandes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Demandes $demandes)
    {
        $this->demandes = $demandes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin-email')
        ->subject("Nouvelle demandes - ".$this->demandes->titre);
    }
}
