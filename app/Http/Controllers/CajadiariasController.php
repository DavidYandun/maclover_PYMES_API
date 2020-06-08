<?php

namespace App\Http\Controllers;

use App\Cajadiarias;
use Illuminate\Http\Request;

class CajadiariasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cajadiarias::all();
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         return Cajadiarias::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cajadiaria  $cajadiaria
     * @return \Illuminate\Http\Response
     */
    public function show( $cajadiarias)
    {
        return Categorias::find($cajadiarias);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cajadiaria  $cajadiaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cajadiarias)
    {
         $cajadiaria=$this->show($cajadiarias);
        $cajadiaria->fill($request->all())->save();
        return $cajadiaria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cajadiaria  $cajadiaria
     * @return \Illuminate\Http\Response
     */
    public function destroy($cajadiarias)
    {
        $cajadiaria=$this->show($cajadiarias);
        $cajadiaria->delete();
        return $cajadiaria;
    }
}
