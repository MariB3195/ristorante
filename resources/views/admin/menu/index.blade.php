<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestione Menu Ristorante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-medium text-gray-900">Lista Piatti Attuali</h3>
                    <a href="{{ route('admin.menu.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                        ➕ Aggiungi Nuovo Piatto
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- BARRA DI RICERCA INSERITA IN MODO ORDINATO -->
                <form action="{{ route('admin.menu.index') }}" method="GET" class="mb-6 flex gap-2">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cerca un piatto per nome..." class="w-full md:w-1/3 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded shadow">
                        🔍 Cerca
                    </button>
                    @if(request('search'))
                        <a href="{{ route('admin.menu.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded shadow flex items-center">
                            ❌ Resetta
                        </a>
                    @endif
                </form>

                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-3 border-b">Nome</th>
                            <th class="p-3 border-b">Categoria</th>
                            <th class="p-3 border-b">Prezzo</th>
                            <th class="p-3 border-b">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menuItems as $item)
                            <tr class="hover:bg-gray-50">
                                <!-- 1. Colonna Nome del Piatto -->
                                <td class="p-3 border-b font-medium text-gray-900">{{ $item->name }}</td>
                                
                                <!-- 2. Colonna Categoria -->
                                <td class="p-3 border-b text-gray-600">{{ $item->category }}</td>
                                
                                <!-- 3. Colonna Prezzo -->
                                <td class="p-3 border-b text-red-600 font-bold">€ {{ number_format($item->price, 2, ',', '.') }}</td>
                                
                                <!-- 4. Colonna Azioni (I tuoi pulsanti) -->
                                <td class="p-3 border-b">
                                    <div class="flex space-x-2">
                                        <!-- Pulsante Modifica -->
                                        <a href="{{ route('admin.menu.edit', $item->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-bold py-1.5 px-3 rounded shadow uppercase tracking-wider">
                                            ✏️ Modifica
                                        </a>

                                        <!-- Pulsante Elimina Sicuro con la pagina intermedia di conferma -->
                                        <a href="{{ route('admin.menu.confirm-delete', $item->id) }}" class="bg-red-600 hover:bg-red-700 text-white text-xs font-bold py-1.5 px-3 rounded shadow uppercase tracking-wider">
                                            🗑️ Condividi / Elimina
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($menuItems->isEmpty())
                    <p class="text-center text-gray-500 mt-6">Nessun piatto trovato o presente nel menu.</p>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
