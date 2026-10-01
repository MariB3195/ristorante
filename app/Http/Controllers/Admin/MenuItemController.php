<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    // 1. Mostra l'elenco di tutti i piatti nell'admin
    // Mostra l'elenco di tutti i piatti nell'admin (con supporto ricerca)
public function index(Request $request)
{
    // Recuperiamo il testo inserito nella barra di ricerca
    $search = $request->input('search');

    // Se c'è una ricerca, filtra per nome, altrimenti prende tutti i piatti
    $menuItems = MenuItem::when($search, function ($query, $search) {
        return $query->where('name', 'like', '%' . $search . '%');
    })->get();

    return view('admin.menu.index', compact('menuItems'));
}

    // 3. Salva il nuovo piatto nel database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|string|max:255',
        ]);

        MenuItem::create($validated);

        return redirect()->route('admin.menu.index')->with('success', 'Piatto inserito con successo!');
    }

    // 4. Mostra la schermata di conferma intermedia prima di cancellare
    public function confirmDelete(MenuItem $menu)
    {
        return view('admin.menu.confirm-delete', compact('menu'));
    }

    // 5. Elimina rigorosamente SOLO il singolo piatto selezionato
    public function destroy(MenuItem $menu)
    {
        $menu->delete();

        return redirect()->route('admin.menu.index')->with('success', 'Il piatto è stato eliminato con successo dal menu.');
    }
}
