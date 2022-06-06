<?php

namespace App\Http\Livewire\Proveedores;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Proveedores;

class VerProveedores extends Component
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
        $proveedores = Proveedores::where('nombre', 'like', '%' . $this->buscar . '%')
                                    ->orWhere('ruc', 'like', '%' . $this->buscar . '%')
                                    ->paginate(5);

        return view('livewire.proveedores.ver-proveedores', compact('proveedores'));
    }
}
