<?php

namespace App\Http\Controllers;

use App\Cajadiaria;
use Illuminate\Http\Request;

class CajadiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cajadiaria::all();
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Cajadiaria::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cajadiaria  $cajadiaria
     * @return \Illuminate\Http\Response
     */
    public function show($cajadiaria)
    {
        return Cajadiaria::find($cajadiaria)->with('registroES')->get();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cajadiaria  $cajadiaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $cajadiaria)
    {
        $caja=$this->show($cajadiaria);
        return $caja->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cajadiaria  $cajadiaria
     * @return \Illuminate\Http\Response
     */
    public function destroy($cajadiaria)
    {
        $caja=$this->show($cajadiaria);
        return $caja->delete();
    }
}
