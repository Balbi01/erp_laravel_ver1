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
    <h1>Modificar registro de usuario</h1>

    <form action="{{route('users.updateUser', $user)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ $user->name }}">
        </label>
        <br>
        <label>
            Correo:
            <br>
            <input type="text" name="email" value="{{ $user->email }}">
        </label>
        <br>
        <label>
            Contraseña:
            <br>
            <input type="text" name="password" value="Contraseña">
        </label>
        <br>
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>