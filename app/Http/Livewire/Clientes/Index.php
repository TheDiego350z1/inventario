<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Clientes;

class Index extends Component
{
    use WithPagination;

    public $buscar_cliente = '';

    public function updatingBuscar_cliente()
    {
        $this->resetPage();
    }

    public function render()
    {
        $clientes = Clientes::where('nombre', 'like', '%' . $this->buscar_cliente . '%')
                            ->orWhere('dui', 'like', '%' . $this->buscar_cliente . '%')
                            ->paginate(5);

        return view('livewire.clientes.index', compact('clientes'));
    }
}
