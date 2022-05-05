<?php

use Illuminate\Support\Facades\Route;

//LiveWire Components
use App\Http\Livewire\Clientes\index;
// use App\Http\Livewire\Proveedores\VerProveedores;

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

//Clientes
Route::get('clientes', index::class)->name('clientes');

//Proveedores
Route::get('proveedores', App\Http\Livewire\Proveedores\VerProveedores::class)->name('proveedores');

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
