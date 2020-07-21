<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturadetalleprov extends Model
{
    protected $fillable = [
        'facturamaestroprovs_id',
        'productos_id',
        'cantidad',
        'descripcion',
        'preciounitario',
        'descuento',
        'preciototal',
        'serie',
    ];
}
