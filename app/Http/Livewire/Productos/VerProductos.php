<?php

namespace App\Http\Livewire\Productos;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Productos;

class VerProductos extends Component
{
    use WithPagination;
    public $buscar = '';

    protected $listeners = ['render' => 'render'];

    public function updatingBuscar()
    {
        $this->resetPage();
    }

    public function render()
    {
        $productos = Productos::where('nombre', 'like', '%' . $this->buscar . '%')
                    ->paginate(10);

        return view('livewire.productos.ver-productos', compact('productos'));
    }
}
