<x-mail::message>
# Nuova Prenotazione Ricevuta!
Ciao Admin,
Hai ricevuto una nuova prenotazione da {{ $reservation->name }}.
**Dettagli della Prenotazione:**
- **Nome:** {{ $reservation->name }}
- **Email:** {{ $reservation->email }}
- **Telefono:** {{ $reservation->phone }}
- **Data:** {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('d/m/Y') }}
- **Ora:** {{ \Carbon\Carbon::parse($reservation->reservation_time)->format('H:i')
}}
- **Numero Ospiti:** {{ $reservation->number_of_guests }}
- **Note:** {{ $reservation->notes ?? 'Nessuna nota' }}
Puoi gestire questa prenotazione accedendo al pannello di amministrazione.
<x-mail::button :url="route('admin.reservations.show', $reservation)">
Gestisci Prenotazione
</x-mail::button>
Grazie,
{{ config('app.name') }}