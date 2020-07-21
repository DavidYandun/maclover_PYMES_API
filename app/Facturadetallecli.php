<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturadetallecli extends Model
{
    protected $fillable=[
        'id',
        'facturamaestroclis_id',
        'productos_id',
        'cantidad',
        'descripcion',
        'preciounitario',
        'preciototal',
        'descuento',
        'serie'
    ];
}
