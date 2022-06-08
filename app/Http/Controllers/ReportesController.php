<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;
use App\Models\Egresos;
use App\Models\kardex_view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    //Pagina principal de Reportes
    public function index()
    {
        return view('reportes.index');
    }

    //Reporte de movimientods de Inventario-kardex
    public function kardex($codigo)
    {
        $kardex = kardex_view::where('codigo','=',$codigo)->orderBy('fecha','asc')->orderBy('tipo','desc')->orderBy('factura','asc')->paginate(50);
        $sumCantidad = kardex_view::where('codigo','=',$codigo)->sum('cantidad');
        $sumCosto = kardex_view::where('codigo','=',$codigo)->sum('costo');
        $sumTotal = kardex_view::where('codigo','=',$codigo)->sum('total');

        return view('reportes.kardex',compact('kardex','sumCantidad','sumCosto','sumTotal'));
    }

    //Reporte de Compras
    public function compras()
    {
        $graficoLabel = collect([]);
        $graficoData = collect([]);
        $compras = Ingresos::selectRaw('SUM(Total) AS total,YEAR(fecha_ingreso) AS anio')
                    ->whereRaw('YEAR(fecha_ingreso) >= YEAR(NOW())-10')
                    ->groupByRaw('YEAR(fecha_ingreso)')
                    ->orderBYRaw('YEAR(fecha_ingreso) asc')->get();

        foreach($compras as $compra)
        {
            $graficoLabel->add($compra->anio);
            $graficoData->add($compra->total);
        }

        return view('reportes.compras',compact('graficoLabel','graficoData'));
    }

    //Reporte de Ventas
    public function ventas()
    {
        $graficoLabel = collect([]);
        $graficoData = collect([]);
        $ventas = Egresos::selectRaw('SUM(Total) AS total,YEAR(fecha_egreso) AS anio')
                    ->whereRaw('YEAR(fecha_egreso) >= YEAR(NOW())-10')
                    ->groupByRaw('YEAR(fecha_egreso)')
                    ->orderBYRaw('YEAR(fecha_egreso) asc')->get();

        foreach($ventas as $venta)
        {
            $graficoLabel->add($venta->anio);
            $graficoData->add($venta->total);
        }

        return view('reportes.ventas',compact('graficoLabel','graficoData'));
    }
}
