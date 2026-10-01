<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-600 leading-tight">
            ⚠️ {{ __('Conferma Eliminazione Piatto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-center">
                
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sei sicuro al 100%?</h3>
                
                <p class="text-gray-600 mb-6">
                    Stai per eliminare definitivamente il piatto <strong class="text-black font-bold">"{{ $menu->name }}"</strong> dal menu del ristorante. Questa azione non può essere annullata.
                </p>

                <div class="flex justify-center space-x-4">
                    <!-- Pulsante Annulla (Ritorno sicuro alla lista) -->
                    <a href="{{ route('admin.menu.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded shadow transition">
                        ❌ No, Annulla
                    </a>

                    <!-- Pulsante Elimina Definitivamente (Invia la cancellazione reale) -->
                    <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow transition">
                            🗑️ Sì, Elimina
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
