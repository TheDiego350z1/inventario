<?php

use Illuminate\Support\Facades\Route;

// Controladores
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductosController;

// Rutas para asginación de roles
// y permisos de usuarios
Route::resource('roles', RoleController::class)->names('admin.roles');

// Usuarios
Route::resource('users', UserController::class)->names('admin.users');

//Productos
Route::resource('productos', ProductosController::class)->names('admin.productos');


Route::get('/sobre', function () {
    return view('sobre');
});
