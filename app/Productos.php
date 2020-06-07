<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable=[
    	'codigo',
    	'codigoaux',
    	'idcategoria',
    	'idubicacion',
		'idmarca',
		'idunidadmedida',
		'nombre',
		'stock',
		'preciocompra',
		'precioventa',
		'precioventamayor',
		'servicio',
		'iva',
		'url',
		'estado',
		'descripcion'];
}
