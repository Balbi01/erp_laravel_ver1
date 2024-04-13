<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        return view('users.users', compact('users'));
    }

    public function usersForm()
    {
        return view ('users.usersForm');
    }

    /**
     * Método para crear un nuevo usuario.
     * @author Omar Ibañez
     */
    public function createUser(Request $request)
    {
        $userToSave = new User();

        $userToSave->name = $request->name;
        $userToSave->email = $request->email;
        $userToSave->password = $request->password;
        $userToSave->save();

        return $this->index();
    }

    public function editUser(User $user)
    {
        return view('users.editUserForm', compact('user'));
    }

    public function updateUser(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return $this->index();
    }
}
