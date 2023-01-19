<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    // Definimos el asunto del correo:
    public $subject = "Información de contacto";

    public function __construct()
    {
        //
    }

    public function build()
    {
        // !Vista que tomara como cuerpo del correo electronico
        return $this->view('emails.contactanos');
    }

    public function attachments()
    {
        return [];
    }
}
