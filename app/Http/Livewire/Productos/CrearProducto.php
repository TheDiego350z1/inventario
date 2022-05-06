<?php

namespace App\Http\Livewire\Productos;

use Livewire\Component;

use App\Models\Productos;

class CrearProducto extends Component
{
    public $open = false;

    //Por defecto el producto se creara con existencia cero
    public $nombre, $marca, $codigo, $sku, $descripcion, $costo;

    protected $rules = [
        'nombre',
        'costo'
    ];

    public function render()
    {
        return view('livewire.productos.crear-producto');
    }

    public function crear()
    {
        $nuevo_producto = Productos::create([
            'nombre' => $this->nombre,
            'marca' => $this->marca,
            'codigo' => $this->codigo,
            'sku' => $this->sku,
            'descripcion' => $this->descripcion,
            'costo' => $this->costo,
            'existencias' => 0
        ]);

        $this->emitTo('productos.ver-productos', 'render');

        $this->emit('exito', 'Producto creado exitosamente');

        $this->reset([
            'open',
            'nombre',
            'marca',
            'codigo',
            'sku',
            'descripcion',
            'costo'
        ]);
    }
}
