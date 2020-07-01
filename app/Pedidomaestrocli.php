<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidomaestrocli extends Model
{
    protected $fillable=[
        'id',
        'idcliente',
        'subtotal',
        'descuento',
        'total',
        'estado',
        'entregado',
        'cobrado',
        'credito',
        'tipopago',
        'observacion',
    ];
}
