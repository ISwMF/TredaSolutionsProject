<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function(){
    return view('login');
});

Route::get('php/tienda/{id}', 'TiendaController@mostrarProductosEnVista');

Route::get('/agregar-tienda', function(){
    return view('agregartienda');
});

Route::get('/agregar-producto', 'TiendaController@mostrarTiendas');

Route::post('agregarproducto', 'ProductoController@store');
Route::post('agregartienda', 'TiendaController@store');
