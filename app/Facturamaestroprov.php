<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturamaestroprov extends Model
{
    protected $fillable = [
        'proveedores_id',
        'numerofactura',
        'fecha',
        'subtotal',
        'descuento',
        'iva',
        'ice',
        'total',
        'estado',
        'credito'
    ];
}
