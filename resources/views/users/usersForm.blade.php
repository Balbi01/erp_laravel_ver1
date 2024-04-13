<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Usuario</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Aquí va el formulario para crear un nuevo usuario</h1>

    <form action="{{route('users.createUser')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="email">
        </label>
        <br>
        <label>
            Contraseña:
            <br>
            <input type="text" name="password">
        </label>
        <br>
        <button type="submit">Guardar Usuario</button>
    </form>
</body>
</html>