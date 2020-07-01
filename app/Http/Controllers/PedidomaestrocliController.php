<?php

namespace App\Http\Controllers;

use App\Pedidomaestrocli;
use Illuminate\Http\Request;

class PedidomaestrocliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pedidomaestrocli::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Pedidomaestrocli::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedidomaestrocli  $pedidomaestrocli
     * @return \Illuminate\Http\Response
     */
    public function show($pedidomaestrocli)
    {
        return Pedidomaestrocli::find($pedidomaestrocli);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedidomaestrocli  $pedidomaestrocli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pedidomaestrocli)
    {
        $pedido=$this->show($pedidomaestrocli);
        $pedido->fill($request->all())->save();
        return $pedido;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedidomaestrocli  $pedidomaestrocli
     * @return \Illuminate\Http\Response
     */
    public function destroy($pedidomaestrocli)
    {
        $pedido=$this->show($pedidomaestrocli);
        $pedido->delete();
        return $pedido;
    }
}
