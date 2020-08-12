<?php


namespace App;

use App\Cajadiaria;
use App\RegistroES;


class Helpers
{

    public static function storeCajaDiaria($dato)
    {
        $caja = Cajadiaria::find($dato->cajadiaria_id);
        if ($dato->entradasalida == true) {
            $caja->increment('preciofinal', $dato->precio);
        } else if ($dato->entradasalida == false) {
            $caja->decrement('preciofinal', $dato->precio);
        }
    }

    public static function updateCajaDiaria($dato, $registroES)
    {
        $registro = RegistroES::find($registroES);
        $caja = Cajadiaria::find($dato->cajadiaria_id);

        if ($registro->entradasalida == true) {
            $caja->decrement('preciofinal', $registro->precio);
        } else if ($registro->entradasalida == false) {
            $caja->increment('preciofinal', $registro->precio);
        }

        if ($dato->entradasalida == true) {
            $caja->increment('preciofinal', $dato->precio);
        } else if ($dato->entradasalida == false) {
            $caja->decrement('preciofinal', $dato->precio);
        }
    }

    public static function storeRegistroESVenta($dato)
    {
        $registro= new RegistroES();
        $registro->cajadiaria_id = $dato->cajadiaria_id;
        $registro->descripcion = "Factura de venta #{$dato->numerofactura}";
        $registro->entradasalida = true;
        $registro->precio = $dato->total;
        $registro->fecha = date('Y-m-d H:m:s');
        $registro->save();
        $dato->entradasalida=true;
        $dato->precio=$dato->total;
        Helpers::storeCajaDiaria($dato);
    }
}
