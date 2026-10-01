<!DOCTYPE html>
<html>
<head>
    <title>Nuova Prenotazione Ricevuta</title>
</head>
<body>
    <h1>Nuova prenotazione per il ristorante!</h1>
    <p><strong>Nome:</strong> {{ $reservation->name }}</p>
    <p><strong>Data:</strong> {{ $reservation->reservation_date }}</p>
    <p><strong>Ora:</strong> {{ $reservation->reservation_time }}</p>
    <p><strong>Numero di ospiti:</strong> {{ $reservation->number_of_guests }}</p>
    <p><strong>Note:</strong> {{ $reservation->notes ?? 'Nessuna nota' }}</p>
</body>
</html>
