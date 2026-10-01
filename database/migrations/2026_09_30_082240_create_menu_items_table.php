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
        Schema::create('menu_items', function (Blueprint $table) {
    $table->id(); // Colonna ID auto-incrementante (chiave primaria)
    $table->string('name'); // Nome del piatto (es. "Pizza Margherita")
    $table->text('description')->nullable(); // Descrizione del piatto (opzionale)
    $table->decimal('price', 8, 2); // Prezzo con 8 cifre totali e 2 decimali
    $table->string('category'); // Categoria (es. "Primi", "Secondi", "Dessert", "Bevande")
    $table->string('image_path')->nullable(); // Percorso dell'immagine (opzionale)
    $table->timestamps(); // Colonna created_at e updated_at
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_items');
    }
};
