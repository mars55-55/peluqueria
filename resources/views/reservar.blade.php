<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar en La Logia</title>
</head>
<body>
    <h2>Reserva tu corte</h2>
    <form action="/reservar" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="number" name="personas" placeholder="N° de Personas" required>
        <input type="datetime-local" name="fecha_reserva" required>
        <button type="submit">Reservar</button>
    </form>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
