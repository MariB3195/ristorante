<?php

namespace App\Http\Controllers;

use App\Models\MenuItem; // Importa il modello MenuItem
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Recupera tutte le voci di menu dal database
        $menuItems = MenuItem::all();
        
        // Passa i dati alla vista menu.index
        return view('menu.index', compact('menuItems'));
    }
}
