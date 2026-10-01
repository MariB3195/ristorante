<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    
    Schema::create('reservations', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // Nome del cliente
    $table->string('email'); // Email del cliente
    $table->string('phone'); // Numero di telefono
    $table->date('reservation_date'); // Data della prenotazione
    $table->time('reservation_time'); // Ora della prenotazione
    $table->integer('number_of_guests'); // Numero di persone
    $table->text('notes')->nullable(); // Note aggiuntive (opzionale)
    $table->string('status')->default('pending'); // Stato della prenotazione
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
