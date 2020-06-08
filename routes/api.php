<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::apiResource("categorias","CategoriasController");

Route::apiResource("sucursales","SucursalesController");
Route::apiResource("categorias","CategoriasController");
Route::apiResource("ubicaciones","UbicacionesController");
Route::apiResource("marcas","MarcasController");
Route::apiResource("unidadmedidas","UnidadMedidasController");
Route::apiResource("productos","ProductosController");
Route::apiResource("cajadiarias","CajadiariasController");