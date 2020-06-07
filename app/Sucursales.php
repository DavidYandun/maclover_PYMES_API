<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    protected $fillable=[
    	'nombre',
		'pais',
		'provincia',
		'ciudad',
		'direccion',
		'telefono',
		'email',
		'responsable'
		];
}
