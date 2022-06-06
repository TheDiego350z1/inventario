<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;

use App\Models\Clientes;

class CrearCliente extends Component
{
    public $open = false;

    public $nombre, $nit, $ruc, $dui, $descripcion;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required'
    ];

    public function render()
    {
        return view('livewire.clientes.crear-cliente');
    }

    public function crear()
    {
        $nuevoCliente = Clientes::create([
            'nombre' => $this->nombre,
            'nit' => $this->nit,
            'dui' => $this->dui,
            'ruc' => $this->ruc,
            'descripcion' => $this->descripcion
        ]);

        $this->emit('exito', 'Cliente creado de forma exitosa');

        $this->reset([
            'open',
            'nombre',
            'nit',
            'ruc',
            'dui',
            'descripcion'
        ]);

    }
}
