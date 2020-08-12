<?php

namespace App\Http\Controllers;

use App\Facturamaestrocli;
use App\RegistroES;
use App\Cajadiaria;
use App\Helpers;
use Illuminate\Http\Request;

class FacturamaestrocliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Facturamaestrocli::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->tipopago == 'efectivo' && $request->cobrado == true) {
            Helpers::storeRegistroESVenta($request); 
        }
        return  Facturamaestrocli::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\facturamaestrocli  $facturamaestrocli
     * @return \Illuminate\Http\Response
     */
    public function show($facturamaestrocli)
    {
        return Facturamaestrocli::find($facturamaestrocli)->with('facturadetalleclis')->where('id',$facturamaestrocli)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\facturamaestrocli  $facturamaestrocli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $facturamaestrocli)
    {
        $factura = $this->show($facturamaestrocli);
        $this->updateRegistroES($request,$facturamaestrocli);
        return $factura->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\facturamaestrocli  $facturamaestrocli
     * @return \Illuminate\Http\Response
     */
    public function destroy($facturamaestrocli)
    {
        $factura = $this->show($facturamaestrocli);
        return $factura->delete();
    }

    
    function updateRegistroES($dato,$fact)
    {
        $factura=$this->show($fact);
        $reg=RegistroES::find('descripcion',"Factura de venta #{$factura->numerofactura}")->first()->get();

        $registro= new Request();
        $registro->cajadiaria_id = $dato->cajadiaria_id;
        $registro->descripcion = "Factura de venta #{$dato->numerofactura}";
        $registro->entradasalida = true;
        $registro->precio = $dato->total;
        $registro->fecha = date('Y-m-d H:m:s');
        $reg->fill($registro->all())->save();

        Cajadiaria::find($registro->cajadiaria_id)->decrement('preciofinal',$factura->total);
        Cajadiaria::find($registro->cajadiaria_id)->increment('preciofinal', $registro->precio);
    }
}
