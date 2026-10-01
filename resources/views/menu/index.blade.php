<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Nostro Menu - Ristorante Fantastico</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .container { width: 80%; margin: 20px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        header { background-color: #333; color: white; padding: 10px 0; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; }
        h1, h2 { text-align: center; color: #333; }
        .menu-category { margin-top: 30px; }
        .menu-category h2 { border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px; }
        .menu-item { display: flex; justify-content: space-between; margin-bottom: 15px; padding-bottom: 10px; border-bottom: 1px dotted #eee; }
        .menu-item:last-child { border-bottom: none; }
        .item-details { flex-grow: 1; }
        .item-name { font-weight: bold; font-size: 1.1em; }
        .item-description { font-size: 0.9em; color: #666; margin-top: 5px; }
        .item-price { font-weight: bold; font-size: 1.1em; color: #d9534f; }
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
    <h1>Il Nostro Menu</h1>

    @php
        // Raggruppa i piatti per la colonna 'category'
        $categorizedMenu = $menuItems->groupBy('category');
    @endphp

    @foreach ($categorizedMenu as $category => $items)
        <div class="menu-category">
            <h2>{{ $category }}</h2>
            @foreach ($items as $item)
                <div class="menu-item">
                    <div class="item-details">
                        <div class="item-name">{{ $item->name }}</div>
                        @if ($item->description)
                            <div class="item-description">{{ $item->description }}</div>
                        @endif
                    </div>
                    <div class="item-price">€ {{ number_format($item->price, 2, ',', '.') }}</div>
                </div>
            @endforeach
        </div>
    @endforeach

    @if ($menuItems->isEmpty())
        <p style="text-align: center;">Il menu è attualmente vuoto. Torna a trovarci presto!</p>
    @endif
</div>
<footer>
    &copy; {{ date('Y') }} Ristorante Fantastico. Tutti i diritti riservati.
</footer>
</body>
</html>
