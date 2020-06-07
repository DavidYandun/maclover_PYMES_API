<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable=[
    	'codigo',
    	'idubicacion',
		'idcategoria',
		'idmarca',
		'nombre',
		'entradas',
		'salidas',
		'stock',
		'unidadmedida',
		'preciocompra',
		'precioventa',
		'precioventamayor',
		'servicio',
		'estado',
		'descripcion'];
}
