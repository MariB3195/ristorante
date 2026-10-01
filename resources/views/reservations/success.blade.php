<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazione Confermata! - Ristorante Fantastico</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 80%; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); text-align: center; }
        header { background-color: #333; color: white; padding: 10px 0; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        h1 { color: #333; }
        .success-message { background-color: #d4edda; color: #155724; border: 1px solid #badbcc; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        a.button { display: inline-block; background-color: #337ab7; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; margin-top: 20px; }
        a.button:hover { background-color: #286090; }
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
    <h1>Grazie per la tua prenotazione!</h1>
    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif
    <p>Abbiamo ricevuto la tua richiesta. Ti contatteremo presto per la conferma.</p>
    <a href="/" class="button">Torna alla Homepage</a>
</div>
<footer>
    &copy; {{ date('Y') }} Ristorante Fantastico. Tutti i diritti riservati.
</footer>
</body>
</html>
