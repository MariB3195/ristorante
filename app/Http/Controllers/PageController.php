<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home'); // Restituisce la vista home.blade.php
    }

    public function contact()
    {
        return view('contact'); // Restituisce la vista contact.blade.php
    }
}
