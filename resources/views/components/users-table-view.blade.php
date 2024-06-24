
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
