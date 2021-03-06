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

//Productos
Route::get('productos', App\Http\Livewire\Productos\VerProductos::class)->name('productos');

//Clientes
Route::get('clientes', App\Http\Livewire\Clientes\index::class)->name('clientes');

//Proveedores
Route::get('proveedores', App\Http\Livewire\Proveedores\VerProveedores::class)->name('proveedores');

//Ingreso Productos
Route::get('ingresos', App\Http\Livewire\Movimientos\IngresoProductos::class)->name('ingreso.productos');

//Egreso Productos
Route::get('egresos', App\Http\Livewire\Movimientos\EgresosProductos::class)->name('egresos.productos');

Route::get('/sobre', function () {
    return view('sobre');
});

// Route::get('/reportes', function () {
//     return view('admin.reportes.index');
// })->name('admin.reportes');
