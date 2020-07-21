<?php

namespace App\Http\Controllers;

use App\Facturamaestroprov;
use Illuminate\Http\Request;

class FacturamaestroprovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Facturamaestroprov::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Facturamaestroprov::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facturamaestroprov  $facturamaestroprov
     * @return \Illuminate\Http\Response
     */
    public function show($facturamaestroprov)
    {
        return Facturamaestroprov::find($facturamaestroprov);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facturamaestroprov  $facturamaestroprov
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $facturamaestroprov)
    {
        $factura=$this->show($facturamaestroprov);
        return $factura->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facturamaestroprov  $facturamaestroprov
     * @return \Illuminate\Http\Response
     */
    public function destroy($facturamaestroprov)
    {
        $factura=$this->show($facturamaestroprov);
        return $factura->delete();
    }
}
