<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invitacion Boda</title>
</head>

<body>
    <div style="width: 600px;display:block;margin:0px auto;padding:16px;">

        <h3 style="text-align: center;">Boda de Chinos & Pablo</h3>
        <p>Invitado: {{ $invitacion->nombre }}</p>
        <p>Teléfono: {{ $invitacion->telefono }}</p>
        <p>Asistira a la boda: {{ ($invitacion->attend) }}</p>
        <p>Vendra acompañado: {{ ($invitacion->friends) }}</p>
        <p>¿Con cuantos acompañantes vendra?: {{ ($invitacion->paxs) }}</p>
        <p>Nombre de los acompañantes: {{ ($invitacion->pax_names) }}</p>
        <p>Mensaje: {{ ($invitacion->message) }}</p>
    </div>
</body>

</html>
