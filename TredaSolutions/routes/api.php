<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tienda/{id}', 'TiendaController@show');
Route::get('tienda-productos/{id}', 'TiendaController@mostrarProductos');
Route::post('tienda', 'TiendaController@store');
Route::post('producto', 'ProductoController@store');
