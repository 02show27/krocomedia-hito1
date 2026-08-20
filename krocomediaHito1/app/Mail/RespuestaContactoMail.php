<?php
namespace App\Mail;

use App\Models\Contacto;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RespuestaContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public Contacto $contacto;

    public function __construct(Contacto $contacto)
    {
        $this->contacto = $contacto;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Respuesta a tu solicitud #'.$this->contacto->id.' - KrocoMedia',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'contactos.detalle',
            with: [
                'isEmail' => true,
            ],
        );
    }
}