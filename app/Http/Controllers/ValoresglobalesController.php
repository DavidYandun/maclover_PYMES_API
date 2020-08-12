<?php

namespace App\Http\Controllers;

use App\Valoresglobales;
use Illuminate\Http\Request;

class ValoresglobalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Valoresglobales::all();
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Valoresglobales::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\valoresglobales  $valoresglobales
     * @return \Illuminate\Http\Response
     */
    public function show( $valoresglobales)
    {
        return Valoresglobales::find($valoresglobales);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\valoresglobales  $valoresglobales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $valoresglobales)
    {
        $valoresglobale=$this->show($valoresglobales);
        $valoresglobale->fill($request->all())->save();
        return $valoresglobale;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\valoresglobales  $valoresglobales
     * @return \Illuminate\Http\Response
     */
    public function destroy($valoresglobales)
    {
        $valoresglobale=$this->show($valoresglobales);
        $valoresglobale->delete();
        return $valoresglobale;
    }
}
