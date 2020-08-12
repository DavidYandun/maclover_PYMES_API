<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable=[
    	'codigo',
    	'codigoaux',
    	'categorias_id',
    	'ubicaciones_id',
		'marcas_id',
		'unidadmedidas_id',
		'nombre',
		'stock',
		'preciocompra',
		'precioventa',
		'precioventamayor',
		'servicio',
		'iva',
		'ice',
		'url',
		'estado',
		'descripcion'];
}
