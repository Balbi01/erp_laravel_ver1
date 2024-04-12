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
        $users = User::paginate();

        return view('users.users', compact('users'));
    }
}
