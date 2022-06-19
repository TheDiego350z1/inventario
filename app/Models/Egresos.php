<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresos extends Model
{
    use HasFactory;

    protected $fillable = [
        'egreso_no',
        'id_cliente',
        'id_producto',
        'factura',
        'cantidad',
        'costo',
        'total',
        'fecha_egreso'
    ];
}
