<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationCreated extends Mailable
{
    use Queueable, SerializesModels;

    // Questa variabile conterrà i dati del tavolo
    public $reservation;

    // Il costruttore accetta la prenotazione passata dal modulo pubblico
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    // Configura l'Oggetto dell'email (il titolo che si vede nella posta in arrivo)
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🔔 Nuova Richiesta di Prenotazione Ricevuta!',
        );
    }

    // Specifica quale foglio grafico Blade deve usare come testo dell'email
    public function content(): Content
    {
        return new Content(
            view: 'emails.reservation-created',
        );
    }
}
