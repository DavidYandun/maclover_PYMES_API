<?php

namespace App\Http\Controllers;

use App\RegistroES;
use App\Cajadiaria;
use Illuminate\Http\Request;

class RegistroESController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegistroES::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->storeCajaDiaria($request);
        return RegistroES::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegistroES  $registroES
     * @return \Illuminate\Http\Response
     */
    public function show($registroES)
    {
        return RegistroES::find($registroES);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegistroES  $registroES
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $registroES)
    {
        $registro = $this->show($registroES);
        $this->updateCajaDiaria($request,$registroES);
        $registro->fill($request->all())->save();
        return $registro;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegistroES  $registroES
     * @return \Illuminate\Http\Response
     */
    public function destroy($registroES)
    {
        $registro = $this->show($registroES);
        $registro->delete();
        return $registro;
    }

    function storeCajaDiaria($dato)
    {
        $caja = Cajadiaria::find($dato->cajadiaria_id);
        if ($dato->entradasalida == true) {
            $caja->increment('preciofinal', $dato->precio);
        } else if ($dato->entradasalida == false) {
            $caja->decrement('preciofinal', $dato->precio);
        }
    }

    function updateCajaDiaria($dato, $registroES)
    {
        $registro = $this->show($registroES);
        $caja = Cajadiaria::find($dato->cajadiaria_id);
        $caja->decrement('preciofinal', $registro->precio);

        if ($dato->entradasalida == true) {
            $caja->increment('preciofinal', $dato->precio);
        } else if ($dato->entradasalida == false) {
            $caja->decrement('preciofinal', $dato->precio);
        }
    }
}
