<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ReportesController extends Controller
{
    //Pagina principal de Reportes
    public function index()
    {
        return view('reportes.index');
    }

    //Reporte de movimientods de INventario-kardex
    public function kardex()
    {
        return view('reportes.kardex');
    }

    //Reporte de Compras
    public function compras()
    {
        return view('reportes.compras');
    }

    //Reporte de Ventas
    public function ventas()
    {
        return view('reportes.ventas');
    }
}
