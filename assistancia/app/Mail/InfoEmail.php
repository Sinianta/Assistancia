<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InfoEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $admin;
    public $passe;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $admin, $passe)
    {
        $this->admin = $admin;
        $this->passe = $passe;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.info-email')
        ->subject("Les information de votre compte administrateurs - ");
    }
}
