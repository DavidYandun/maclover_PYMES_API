<?php

namespace App\Http\Controllers;

use App\Marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Marcas::all();
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        return Marcas::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function show($marcas)
    {
        return Marcas::find($marcas);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $marcas)
    {
        $marca=$this->show($marcas);
        $marca->fill($request->all())->save();
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marcas  $marcas
     * @return \Illuminate\Http\Response
     */
    public function destroy($marcas)
    {
        $marca=$this->show($marcas);
        $marca->delete();
        return $marca;
    }
}
