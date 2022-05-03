<?php

use Illuminate\Support\Facades\Route;

//LiveWire Components
use App\Http\Livewire\Clientes\Clientes;

// Controladores
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\ClientesController;
use App\Http\Controllers\Admin\ProveedoresController;

// Rutas para asginación de roles
// y permisos de usuarios
Route::resource('roles', RoleController::class)->names('admin.roles');

// Usuarios
Route::resource('users', UserController::class)->names('admin.users');

//Productos
Route::resource('productos', ProductosController::class)->names('admin.productos');

//Clientes
Route::get('clientes', Clientes::class)->name('clientes');
// Route::resource('clientes', ClientesController::class)->names('admin.clientes');

//Proveedores
Route::resource('proveedores', ProveedoresController::class)->names('admin.proveedores');

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
