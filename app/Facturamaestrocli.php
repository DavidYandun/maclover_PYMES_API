<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;

class Facturamaestrocli extends Model
{
    protected $fillable = [
        'id',
        'clientes_id',
        'fecha',
        'fechaentrega',
        'numerofactura',
        'subtotal',
        'descuento',
        'iva',
        'ice',
        'total',
        'estado',
        'entregado',
        'cobrado',
        'credito',
        'facturado',
        'tipopago',
        'observacion',
    ];

    public static function boot()
    {
        parent::boot();
        static::created(function ($service_request) {
            Event::fire('service_request.created', $service_request);
        });
    }

    public function facturadetalleclis()
    {
        return $this->hasMany('App\Facturadetallecli');
    }
}
