<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicaciones extends Model
{
    protected $fillable = [
        'sucursales_id',
        'nombre'
    ];
}
