<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ristorante Fantastico - Benvenuti!</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 80%; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        header { background-color: #333; color: white; padding: 10px 0; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        h1, h2 { text-align: center; color: #333; }
        p { text-align: justify; line-height: 1.6; }
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
    <h1>Benvenuti al Ristorante Fantastico!</h1>
    <p>
        Siamo lieti di darvi il benvenuto al Ristorante Fantastico, il luogo 
        dove la tradizione culinaria incontra l'innovazione.
        Offriamo un'esperienza gastronomica unica, con piatti preparati con 
        ingredienti freschi e di stagione.
    </p>
    <p>
        <strong>Orari di Apertura:</strong><br>
        Pranzo: Martedì - Domenica, 12:00 - 14:30<br>
        Cena: Martedì - Domenica, 19:00 - 22:30<br>
        Lunedì: Chiuso
    </p>
    <p>
        <strong>Indirizzo:</strong><br>
        Via della Cucina, 10<br>
        12345 - Città Gustosa
    </p>
</div>
<footer>
    &copy; {{ date('Y') }} Ristorante Fantastico. Tutti i diritti riservati.
</footer>
</body>
</html>
