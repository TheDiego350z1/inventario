<?php

use Illuminate\Support\Facades\Route;

// Controladores
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\ClientesController;

// Rutas para asginación de roles
// y permisos de usuarios
Route::resource('roles', RoleController::class)->names('admin.roles');

// Usuarios
Route::resource('users', UserController::class)->names('admin.users');

//Productos
Route::resource('productos', ProductosController::class)->names('admin.productos');

//Clientes
Route::resource('clientes', ClientesController::class)->names('admin.clientes');

//Vista de Egreso de productos
Route::get('/Egreso-Producto', function () {
    return view('admin.productosEgreso.index');
})->name('admin.egreso.producto');

Route::get('/sobre', function () {
    return view('sobre');
});

// Route::get('/reportes', function () {
//     return view('admin.reportes.index');
// })->name('admin.reportes');
