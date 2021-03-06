<?php

use App\Http\Controllers\FacturamaestrocliController;
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
//inventario
Route::apiResource("sucursales","SucursalesController");
Route::apiResource("categorias","CategoriasController");
Route::apiResource("ubicaciones","UbicacionesController");
Route::apiResource("marcas","MarcasController");
Route::apiResource("unidadmedidas","UnidadMedidasController");
Route::apiResource("productos","ProductosController");
Route::apiResource("cajadiarias","CajadiariasController");

//ventas
Route::apiResource("clientes","ClientesController");
Route::get('/facturamaestrocli/last', 'FacturamaestrocliController@showlast');
Route::apiResource("facturamaestrocli","FacturamaestrocliController");

Route::apiResource("facturadetallecli","FacturadetallecliController");
Route::apiResource("cajadiaria","CajadiariaController");
Route::apiResource("registroes","RegistroESController");


//proveedores
Route::apiResource("proveedores","ProveedoresController");
Route::apiResource("facturamaestroprov","FacturamaestroprovController");
Route::apiResource("facturadetalleprov","FacturadetalleprovController");

//valoresglobales
Route::apiResource("valoresglobales","ValoresglobalesController");

