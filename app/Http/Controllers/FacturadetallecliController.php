<?php

namespace App\Http\Controllers;

use App\Facturadetallecli;
use Illuminate\Http\Request;
use App\Productos;
use Illuminate\Support\Facades\DB;

class FacturadetallecliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Facturadetallecli::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = (json_decode($request->getContent(), true));
        foreach ($data as $d) {
            //controla la disminución del stock de los productos
            Productos::find($d['productos_id'])->decrement('stock', $d['cantidad']);
            Facturadetallecli::create($d);
        }
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facturadetallecli  $facturadetallecli
     * @return \Illuminate\Http\Response
     */
    public function show($facturadetallecli)
    {
        return Facturadetallecli::find($facturadetallecli);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facturadetallecli  $facturadetallecli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $facturadetallecli)
    {
        $detalle = $this->show($facturadetallecli);
        
        Productos::find($detalle->productos_id)->increment('stock', $detalle->cantidad);
        Productos::find($request->productos_id)->decrement('stock', $request->cantidad);
        $detalle->fill($request->all())->save();
        return $detalle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facturadetallecli  $facturadetallecli
     * @return \Illuminate\Http\Response
     */
    public function destroy($facturadetallecli)
    {
        $detalle = $this->show($facturadetallecli);
        return $detalle->delete();
    }
}
