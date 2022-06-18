<?php

namespace App\Http\Livewire\Movimientos;

use Livewire\Component;

use App\Models\Proveedores;
use App\Models\Productos;
use App\Models\Ingresos;
use Carbon\Carbon;

class IngresoProductos extends Component
{
    public $buscar;

    public $open = false; //Variable de apertua de modal

    public $productos = [], $lista = [], $costo, $cantidad, $total, $productoAdd, $proveedor, $factura;

    protected $rules = [
        'proveedor' => 'required',
        'factura' => 'required'
    ];

    public function render()
    {
        $proveedores = Proveedores::all();
        return view('livewire.movimientos.ingreso-productos', compact('proveedores'));
    }

    public function buscar()
    {
        $this->productos = Productos::where('codigo', 'like', '%' . $this->buscar . '%')
                                    ->take(3)
                                    ->get();
    }

    public function openModal($id)
    {
        $this->open = true;
        $this->productoAdd = Productos::find($id)
                        ->first();
    }

    public function add()
    {
        $this->total = ($this->costo * $this->cantidad);
        array_push($this->lista, [
            'idProducto' => $this->productoAdd->id,
            'nombre' => $this->productoAdd->nombre,
            'cantidad' => $this->cantidad,
            'costo' => $this->costo,
            'total' => $this->total,
        ]);

        $this->emit('exito', 'Producto Agregado Exitosamente');

        $this->reset([
            'open',
            'costo',
            'productoAdd',
            'cantidad',
            'total',
            'productos'
        ]);
    }

    public function save()
    {
        $this->validate();

        for ($i=0; $i < count($this->lista) ; $i++) {
            $ingreso = new Ingresos;
            $ingreso->ingreso_no = '0000101';
            $ingreso->id_proveedor = $this->proveedor;
            $ingreso->id_producto = $this->lista[$i]["idProducto"];
            $ingreso->factura = $this->factura;
            $ingreso->cantidad = $this->lista[$i]["cantidad"];
            $ingreso->costo = $this->lista[$i]["costo"];
            $ingreso->total = $this->lista[$i]["total"];
            $ingreso->fecha_ingreso = Carbon::now();
            $ingreso->save();
        }

        $this->emit('exito', 'Productos guardados con exito');

    }
}
