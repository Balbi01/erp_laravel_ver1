<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Listado de Usuarios</title>
</head>
<body>
    <x-sidebar></x-sidebar>
    <div class="container pl-20">
        <h1>Listado de Usuarios</h1>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{-- {{ route('users.show', $user) }} --}}">Ver</a>
                            <a href="{{ route('users.editUser', $user->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

        <a href="{{route('users.form')}}">Ir al formulario de nuevo usuario</a>



    </div>

</body>

</html>


{{-- <div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12
     gap-4">
        <div class="bg-blue-100">Div 1</div>
        <div class="bg-blue-200">Div 2</div>
        <div class="bg-blue-300">Div 3</div>
        <div class="bg-blue-400">Div 4</div>
        <div class="bg-blue-500">Div 1</div>
        <div class="bg-blue-600">Div 2</div>
        <div class="bg-blue-700">Div 3</div>
        <div class="bg-blue-800">Div 4</div>
        <div class="bg-blue-500">Div 1</div>
        <div class="bg-blue-600">Div 2</div>
        <div class="bg-blue-700">Div 3</div>
        <div class="bg-blue-800">Div 4</div>
    </div>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    {{ $users->links() }}
</div> --}}
