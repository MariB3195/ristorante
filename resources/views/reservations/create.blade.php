<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenota un Tavolo - Ristorante Fantastico</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 80%; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        header { background-color: #333; color: white; padding: 10px 0; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        h1, h2 { text-align: center; color: #333; }
        form { margin-top: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        textarea { resize: vertical; min-height: 80px; }
        button { background-color: #d9534f; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 1em; }
        button:hover { background-color: #c9302c; }
        .error-message { color: red; font-size: 0.9em; margin-top: -10px; margin-bottom: 10px; }
        footer { text-align: center; padding: 20px; margin-top: 40px; background-color: #eee; color: #555; border-top: 1px solid #ddd; }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="/">Home</a>
        <a href="/menu">Menu</a>
        <a href="/reservations/create">Prenota un Tavolo</a>
        <a href="/contact">Contatti</a>
    </nav>
</header>
<div class="container">
    <h1>Prenota un Tavolo</h1>

    @if ($errors->any())
        <div style="background-color: #fdd; border: 1px solid red; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
            <h4 style="color: red; margin-top: 0;">Si prega di correggere i seguenti errori:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome Completo:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label for="phone">Telefono:</label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required>
        </div>
        <div>
            <label for="reservation_date">Data della Prenotazione:</label>
            <input type="date" id="reservation_date" name="reservation_date" value="{{ old('reservation_date', date('Y-m-d')) }}" required>
        </div>
        <div>
            <label for="reservation_time">Ora della Prenotazione:</label>
            <input type="time" id="reservation_time" name="reservation_time" value="{{ old('reservation_time') }}" required>
        </div>
        <div>
            <label for="number_of_guests">Numero di Persone:</label>
            <input type="number" id="number_of_guests" name="number_of_guests" value="{{ old('number_of_guests') }}" min="1" required>
        </div>
        <div>
            <label for="notes">Note (opzionale):</label>
            <textarea id="notes" name="notes">{{ old('notes') }}</textarea>
        </div>
        <button type="submit">Invia Prenotazione</button>
    </form>
</div>
<footer>
    &copy; {{ date('Y') }} Ristorante Fantastico. Tutti i diritti riservati.
</footer>
</body>
</html>
