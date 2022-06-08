<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

//Ruta para Controlador Reportes
//Route::get('reportes',[ReportesController::class,'index']);
Route::controller(ReportesController::class)->group(function(){
    Route::get('reportes','index');
    Route::get('reportes/inventario','inventario');
    Route::get('reportes/kardex/{codigo}','kardex');
    Route::get('reportes/compras','compras');
    Route::get('reportes/ventas','ventas');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
