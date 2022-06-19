<?php

namespace App\Http\Livewire\Movimientos;

use Livewire\Component;

use App\Models\Clientes;
use App\Models\Productos;
use App\Models\Egresos;
use Carbon\Carbon;

class EgresosProductos extends Component
{
    public $buscar;

    public $open = false; //Variable de apertua de modal

    public $productos = [], $lista = [], $cantidad, $total, $productoAdd, $proveedor, $factura;

    protected $rules = [
        'proveedor' => 'required',
        'factura' => 'required'
    ];

    public function render()
    {
        $clientes = Clientes::all();
        return view('livewire.movimientos.egresos-productos', compact('clientes'));
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
        $this->total = ($this->productoAdd->costo * $this->cantidad);
        array_push($this->lista, [
            'idProducto' => $this->productoAdd->id,
            'nombre' => $this->productoAdd->nombre,
            'cantidad' => $this->cantidad,
            'costo' => $this->productoAdd->costo,
            'total' => $this->total,
        ]);

        $this->emit('exito', 'Producto Agregado Exitosamente');

        $this->reset([
            'open',
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
            $egreso = new Egresos;
            $egreso->egreso_no = '0000101';
            $egreso->id_cliente = $this->proveedor;
            $egreso->id_producto = $this->lista[$i]["idProducto"];
            $egreso->factura = $this->factura;
            $egreso->cantidad = $this->lista[$i]["cantidad"];
            $egreso->costo = $this->lista[$i]["costo"];
            $egreso->total = $this->lista[$i]["total"];
            $egreso->fecha_egreso = Carbon::now();
            $egreso->save();
        }

        $this->emit('exito', 'Productos guardados con exito');

        $this->reset([
            'open',
            'productoAdd',
            'cantidad',
            'total',
            'productos',
            'lista'
        ]);

    }
}
