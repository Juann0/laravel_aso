<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    @if (Auth::user()->rol == 'REGULAR')

    @endif

    @if (Auth::user()->rol == 'ADM')
    <h1>Administrador</h1>
    @endif
</body>

</html>