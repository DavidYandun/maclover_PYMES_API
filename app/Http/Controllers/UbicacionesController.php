<?php

namespace App\Http\Controllers;

use App\Ubicaciones;
use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ubicaciones::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Ubicaciones::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function show($ubicaciones)
    {
        return Ubicaciones::find($ubicaciones);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ubicaciones)
    {
        $ubicacion=$this->show($ubicaciones);
        $ubicacion->fill($request->all())->save();
        return $ubicacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicaciones  $ubicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($ubicaciones)
    {
        $ubicacion=$this->show($ubicaciones);
        $ubicacion->delete();
        return $ubicacion;
    }
}
