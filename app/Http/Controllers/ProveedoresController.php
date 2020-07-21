<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Proveedores::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Proveedores::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show( $proveedores)
    {
        return Proveedores::find($proveedores);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $proveedores)
    {
        $proveedor=$this->show($proveedores);
        $proveedor->fill($request->all())->save();
        return $proveedor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($proveedores)
    {
        $proveedor=$this->show($proveedores);
        $proveedor->delete();
        return $proveedor;
    }
}
