<?php

namespace App\Http\Livewire\Movimientos;

use Livewire\Component;

use App\Models\Productos;

class IngresoProductos extends Component
{
    public $buscar_producto = '';

    public $productos = [], $lista = [];

    public function render()
    {
        return view('livewire.movimientos.ingreso-productos');
    }

    public function buscar()
    {
        $this->productos = Productos::where('nombre', 'like', '%' . $this->buscar_producto . '%')
                                    ->get();
    }
}
