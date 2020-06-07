<?php

namespace App\Http\Controllers;

use App\Unidadmedidas;
use Illuminate\Http\Request;

class UnidadmedidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Unidadmedidas::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Unidadmedidas::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\unidadmedidas  $unidadmedidas
     * @return \Illuminate\Http\Response
     */
    public function show($unidadmedidas)
    {
        return Unidadmedidas::find($unidadmedidas);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\unidadmedidas  $unidadmedidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $unidadmedidas)
    {
        $unidadmedida=$this->show($unidadmedidas);
        $unidadmedida->fill($request->all())->save();
        return $unidadmedida;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\unidadmedidas  $unidadmedidas
     * @return \Illuminate\Http\Response
     */
    public function destroy($unidadmedidas)
    {
        $unidadmedida=$this->show($unidadmedidas);
        $unidadmedida->delete();
        return $unidadmedida;
    }
}
