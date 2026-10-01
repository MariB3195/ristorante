<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController; // Importiamo il controller del profilo
// Controller dell'area amministrativa
use App\Http\Controllers\Admin\MenuItemController as AdminMenuController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;

// 1. ROTTE DI AUTENTICAZIONE DI BREEZE
require __DIR__.'/auth.php';

// 2. AREA AMMINISTRATIVA E PROFILO PROTETTI (Richiedono Login)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard principale dell'amministratore
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rotte per la gestione del profilo utente cercate da Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotte CRUD per la gestione del Ristorante (Menu e Prenotazioni)
    Route::prefix('admin')->name('admin.')->group(function () {
        // Rotta per la pagina di conferma eliminazione
        Route::get('menu/{menu}/delete', [AdminMenuController::class, 'confirmDelete'])->name('menu.confirm-delete');
        Route::resource('menu', AdminMenuController::class);
        Route::resource('reservations', AdminReservationController::class)->except(['create', 'store']);
    });
});

// 3. ROTTE PUBBLICHE DEL SITO (Per i clienti)
Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/menu', [MenuController::class, 'index']);

// Invio delle prenotazioni lato pubblico
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/success', [ReservationController::class, 'success'])->name('reservations.success');
