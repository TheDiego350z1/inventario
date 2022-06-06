<?php

namespace App\Http\Livewire\Proveedores;

use Livewire\Component;

use App\Models\Proveedores;

class CrearProveedores extends Component
{
    public $open = false;

    public $nombre, $nit, $ruc, $dui, $descripcion;

    protected $rules = [
        'nombre' => 'required',
        'nit' => 'required',
        'ruc' => 'required'
    ];

    public function render()
    {
        return view('livewire.proveedores.crear-proveedores');
    }

    public function crear()
    {
        $nuevo_proveedor = Proveedores::create([
            'nombre' => $this->nombre,
            'nit' => $this->nit,
            'dui' => $this->dui,
            'ruc' => $this->ruc,
            'descripcion' => $this->descripcion
        ]);

        $this->emitTo('proveedores.ver-proveedores', 'render');

        $this->emit('exito', 'Proveedor creado de forma exitosa');

        $this->reset([
            'open',
            'nombre',
            'nit',
            'dui',
            'ruc',
            'descripcion'
        ]);
    }

    public function out()
    {
        $this->reset([
            'open',
            'nombre',
            'nit',
            'dui',
            'ruc',
            'descripcion'
        ]);
    }
}
