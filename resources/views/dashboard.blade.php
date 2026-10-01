<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pannello Amministratore') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Benvenuta, {{ Auth::user()->name }}!</h3>
                    <p class="mb-6 text-gray-600">Da qui puoi gestire interamente la logica del tuo ristorante.</p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Pulsante Gestione Menu -->
                        <a href="{{ route('admin.menu.index') }}" class="block p-6 bg-blue-50 rounded-lg border border-blue-200 shadow-sm hover:bg-blue-100 transition">
                            <h4 class="text-xl font-semibold text-blue-800">🍽️ Gestione Menu</h4>
                            <p class="text-blue-700 mt-2">Inserisci nuovi piatti, modifica i prezzi, le descrizioni o cancella voci dal menu.</p>
                        </a>

                        <!-- Pulsante Gestione Prenotazioni -->
                        <a href="{{ route('admin.reservations.index') }}" class="block p-6 bg-green-50 rounded-lg border border-green-200 shadow-sm hover:bg-green-100 transition">
                            <h4 class="text-xl font-semibold text-green-800">📅 Gestione Prenotazioni</h4>
                            <p class="text-green-700 mt-2">Visualizza le richieste dei clienti e approva o annulla i tavoli prenotati.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
