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
    <div class="container">
        <h1>Listado de Usuarios</h1>

        <div>
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
        </div>

    </div>

</body>

</html>
