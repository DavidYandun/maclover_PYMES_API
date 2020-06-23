<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  protected $fillable=[
    	'ruc',
    	'razonsocial',
    	'telefono',
    	'email',
		'direccion'];
}
