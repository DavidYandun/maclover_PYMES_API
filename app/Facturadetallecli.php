<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturadetallecli extends Model
{
    protected $fillable=[
        'id',
        'facturamaestrocli_id',
        'productos_id',
        'cantidad',
        'descripcion',
        'preciounitario',
        'preciototal',
        'descuento',
        'serie'
    ];
}
