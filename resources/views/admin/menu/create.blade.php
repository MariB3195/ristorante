<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aggiungi Nuovo Piatto al Menu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="mb-6">
                    <a href="{{ route('admin.menu.index') }}" class="text-blue-600 hover:text-blue-800 font-medium">
                        ← Torna alla lista piatti
                    </a>
                </div>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <strong class="font-bold">Attenzione!</strong> Controlla i seguenti campi:
                        <ul class="mt-2 list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.menu.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Nome Piatto -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nome del Piatto</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <!-- Categoria -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Categoria</label>
                        <select name="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            <option value="">Seleziona una categoria</option>
                            <option value="Antipasti">Antipasti</option>
                            <option value="Primi Piatti">Primi Piatti</option>
                            <option value="Secondi Piatti">Secondi Piatti</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Bevande">Bevande</option>
                        </select>
                    </div>

                    <!-- Prezzo -->
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Prezzo (€)</label>
                        <input type="number" step="0.01" name="price" id="price" value="{{ old('price') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>

                    <!-- Descrizione -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Descrizione (Ingredienti)</label>
                        <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description') }}</textarea>
                    </div>

                    <!-- Pulsante Invio -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
                            💾 Salva Piatto nel Menu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
