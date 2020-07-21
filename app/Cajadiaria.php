<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cajadiaria extends Model
{
    protected $fillable=[
        'precioinicial',
        'fechayhora',
        'turno',
        'preciofinal',
        'responsable',
        'estado'

    ];
    public function registroES()
    {
        return $this->hasMany('App\RegistroES');
    }
}
