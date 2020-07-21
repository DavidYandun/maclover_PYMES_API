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
        //controla la disminución del stock de los productos
        foreach($request as $req){
            Productos::find($req->idproducto)->decrement('stock', $req->cantidad);
            return Facturadetallecli::create($req->all());
        }
     
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
        return $detalle->fill($request->all())->save();
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
