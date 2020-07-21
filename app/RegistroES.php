<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroES extends Model
{
    protected $fillable = [
        'cajadiaria_id',
        'facturamaestroclis_id',
        'facturamaestroprovs_id',
        'descripcion',
        'entradasalida',
        'precio',
        'fecha',
    ];
}
