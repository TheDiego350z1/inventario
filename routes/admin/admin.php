<?php

use Illuminate\Support\Facades\Route;

// Controladores
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

// Rutas para asginación de roles
// y permisos de usuarios
Route::resource('roles', RoleController::class)->names('admin.roles');

// Usuarios
Route::resource('users', UserController::class)->names('admin.users');


Route::get('/sobre', function () {
    return view('sobre');
});
