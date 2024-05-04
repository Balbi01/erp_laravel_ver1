<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dasboard');
});

Route::get('users', [UserController::class, 'index'])->name('users.index');

Route::get('users/form', [UserController::class, 'usersForm'])->name('users.form');

// Ruta para crear un nuevo usuario.
Route::post('users/saveUser', [UserController::class, 'createUser'])->name('users.createUser');

// Ruta para modificar un usuario.
Route::get('users/edit/{user}', [UserController::class, 'editUser'])->name('users.editUser');
Route::put('users/update/{user}', [UserController::class, 'updateUser'])->name('users.updateUser');

Route::get('home', [HomeController::class, 'index'])->name('home.index');
