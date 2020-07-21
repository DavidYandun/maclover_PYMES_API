<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturamaestrocli extends Model
{
    protected $fillable=[
        'id',
        'clientes_id',
        'fecha',
        'fechaentrega',
        'numerofactura',
        'subtotal',
        'descuento',
        'iva',
        'ice',
        'total',
        'estado',
        'entregado',
        'cobrado',
        'credito',
        'facturado',
        'tipopago',
        'observacion',
    ];
}
