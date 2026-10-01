<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Mostra tutte le prenotazioni arrivate
    // Mostra tutte le prenotazioni arrivate (con supporto filtri e ricerca)
public function index(Request $request)
{
    // Catturiamo i parametri inviati dalla barra di ricerca
    $search = $request->input('search');
    $status = $request->input('status');

    // Costruiamo la query filtrando i dati in tempo reale
    $reservations = Reservation::query()
        ->when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        })
        ->when($status, function ($query, $status) {
            return $query->where('status', $status);
        })
        ->orderBy('reservation_date', 'desc')
        ->get();

    return view('admin.reservations.index', compact('reservations'));
}


    // Permette di aggiornare lo stato (es. da pending a confirmed)
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $reservation->update(['status' => $request->status]);

        return redirect()->route('admin.reservations.index')->with('success', 'Stato della prenotazione aggiornato!');
    }

    // Permette di eliminare una prenotazione vecchia
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservations.index')->with('success', 'Prenotazione eliminata con successo.');
    }
}
