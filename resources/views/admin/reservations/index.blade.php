<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestione Prenotazioni Tavoli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <h3 class="text-lg font-medium text-gray-900 mb-6">Richieste di Prenotazione</h3>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- BARRA DI RICERCA E FILTRI -->
                <form action="{{ route('admin.reservations.index') }}" method="GET" class="mb-6 flex flex-col md:flex-row gap-3">
                    <!-- Campo testo per Nome Cliente -->
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cerca cliente per nome..." class="w-full md:w-1/3 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">

                    <!-- Menu a tendina per lo Stato -->
                    <select name="status" class="w-full md:w-1/4 rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                        <option value="">Tutti gli stati</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>⏳ In Attesa (Pending)</option>
                        <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>✅ Confermate</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>❌ Annullate</option>
                    </select>

                    <!-- Pulsante Cerca/Filtra -->
                    <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded shadow">
                        🔍 Filtra
                    </button>

                    <!-- Pulsante Resetta Filtri (Compare solo se c'è un filtro attivo) -->
                    @if(request('search') || request('status'))
                        <a href="{{ route('admin.reservations.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded shadow flex items-center justify-center">
                            ❌ Resetta
                        </a>
                    @endif
                </form>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="p-3 border-b">Cliente</th>
                                <th class="p-3 border-b">Contatti</th>
                                <th class="p-3 border-b">Data e Ora</th>
                                <th class="p-3 border-b">Persone</th>
                                <th class="p-3 border-b">Stato</th>
                                <th class="p-3 border-b">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $res)
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 border-b font-medium">{{ $res->name }}</td>
                                    <td class="p-3 border-b text-sm text-gray-600">
                                        📞 {{ $res->phone }}<br>✉️ {{ $res->email }}
                                    </td>
                                    <td class="p-3 border-b text-sm">
                                        📅 {{ \Carbon\Carbon::parse($res->reservation_date)->format('d/m/Y') }}<br>⏰ {{ $res->reservation_time }}
                                    </td>
                                    <td class="p-3 border-b font-bold text-center">{{ $res->number_of_guests }}</td>
                                    <td class="p-3 border-b">
                                        <span class="px-2 py-1 rounded text-xs font-bold 
                                            {{ $res->status == 'confirmed' ? 'bg-green-100 text-green-800' : '' }}
                                            {{ $res->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                            {{ $res->status == 'cancelled' ? 'bg-red-100 text-red-800' : '' }}">
                                            {{ strtoupper($res->status) }}
                                        </span>
                                    </td>
                                    <td class="p-3 border-b">
                                        <div class="flex space-x-2">
                                            <!-- Bottone Approva -->
                                            @if($res->status !== 'confirmed')
                                                <form action="{{ route('admin.reservations.update', $res->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="confirmed">
                                                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white text-xs font-bold py-1 px-2 rounded">Conferma</button>
                                                </form>
                                            @endif

                                            <!-- Bottone Rifiuta -->
                                            @if($res->status !== 'cancelled')
                                                <form action="{{ route('admin.reservations.update', $res->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="cancelled">
                                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-xs font-bold py-1 px-2 rounded">Annulla</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if($reservations->isEmpty())
                    <p class="text-center text-gray-500 mt-6">Nessuna prenotazione trovata con i filtri selezionati.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
