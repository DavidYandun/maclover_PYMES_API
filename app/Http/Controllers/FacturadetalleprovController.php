<?php

namespace App\Http\Controllers;

use App\Facturadetalleprov;
use Illuminate\Http\Request;
use App\Productos;
use Illuminate\Support\Facades\DB;

class FacturadetalleprovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Facturadetalleprov::all();

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
        Productos::find($request->idproducto)->increment('stock',$request->cantidad);
        return Facturadetalleprov::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facturadetalleprov  $facturadetalleprov
     * @return \Illuminate\Http\Response
     */
    public function show($facturadetalleprov)
    {
        return Facturadetalleprov::find($facturadetalleprov);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facturadetalleprov  $facturadetalleprov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $facturadetalleprov)
    {
        $detalle=$this->show($facturadetalleprov);
        return $detalle->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facturadetalleprov  $facturadetalleprov
     * @return \Illuminate\Http\Response
     */
    public function destroy( $facturadetalleprov)
    {
        $detalle=$this->show($facturadetalleprov);
        return $detalle->delete();
    }
}
