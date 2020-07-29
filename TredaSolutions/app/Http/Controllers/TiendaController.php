<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;

class TiendaController extends Controller
{
    public function index()
    {
        return Tienda::all();
    }

    public function show($id)
    {
        return Tienda::find($id);
    }

    public function store(Request $request)
    {
        return Tienda::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $tienda = Tienda::findOrFail($id);
        $tienda->update($request->all());

        return $tienda;
    }

    public function delete(Request $request, $id)
    {
        $tienda = Tienda::findOrFail($id);
        $tienda->delete();

        return 204;
    }
    
    public function mostrarProductos($id){
        $tienda = Tienda::find($id);
        return $tienda->obtenerProductos;
    }

}