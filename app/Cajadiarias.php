<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cajadiarias extends Model
{
    protected $fillable=[
    	'precioinicial',
   		'fecha',
   		'turno',
   		'preciofinal',
   		'responsable'
   	];
}
