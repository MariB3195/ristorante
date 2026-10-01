<?php
namespace App\Http\Controllers; // CORRETTO: namespace per il controller pubblico
use App\Mail\ReservationCreated;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
class ReservationController extends Controller
{
public function create()
{
return view('reservations.create');
}
public function store(Request $request)
{
// 1. Validazione dei dati
$validated = $request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email|max:255',
'phone' => 'required|string|max:20',
'reservation_date' => 'required|date|after_or_equal:today',
'reservation_time' => 'required|date_format:H:i',
'number_of_guests' => 'required|integer|min:1',
'notes' => 'nullable|string|max:500',
]);
// 2. Creazione della prenotazione nel database
$reservation = Reservation::create($validated);
// 3. INVIO DELLA NOTIFICA EMAIL
Mail::to('info@demomailtrap.com')->send(new ReservationCreated($reservation));
// Sostituisci 'admin@ristorante.com' con l'email del tuo amministratore
// 4. Reindirizza l'utente con un messaggio di successo
return redirect()->route('reservations.success')->with('success', 'La tua
prenotazione è stata inviata con successo!');
}
public function success()
{
return view('reservations.success');
}
}
