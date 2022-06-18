<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    use HasFactory;

    protected $fillable = [
        'intreso_no',
        'id_proveedor',
        'id_producto',
        'factura',
        'cantidad',
        'costo',
        'total',
        'fecha_ingreso'
    ];
}
