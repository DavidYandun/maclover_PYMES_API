<?php

namespace App\Http\Controllers;

use App\Sucursales;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sucursales::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Sucursales::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function show( $sucursales)
    {
        return Sucursales::find($sucursales);
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sucursales)
    {
        $sucursal=$this->show($sucursales);
        $sucursal->fill($request->all())->save();
        return $sucursal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sucursales  $sucursales
     * @return \Illuminate\Http\Response
     */
    public function destroy( $sucursales)
    {
        $sucursal=$this->show($sucursales);
        $sucursal->delete();
        return $sucursal;
    }
}
