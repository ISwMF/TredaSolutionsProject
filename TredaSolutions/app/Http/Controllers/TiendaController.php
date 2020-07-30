<?php

namespace App\Http\Controllers;

use App\Providers\NuevaPeticion;
use Illuminate\Http\Request;
use App\Tienda;

class TiendaController extends Controller
{
    public function index()
    {
        event(new NuevaPeticion("Mostrar todas las tiendas."));
        return Tienda::all();
    }

    public function show($id)
    {
        event(new NuevaPeticion("Mostrar tienda."));
        return Tienda::find($id);
    }

    public function store(Request $request)
    {
        event(new NuevaPeticion("Crear nueva tienda."));
        return Tienda::create($request->all());
    }

    public function update(Request $request, $id)
    {
        event(new NuevaPeticion("Actualizar datos de tienda."));
        $tienda = Tienda::findOrFail($id);
        $tienda->update($request->all());

        return $tienda;
    }

    public function delete(Request $request, $id)
    {
        event(new NuevaPeticion("Borrar tienda."));
        $tienda = Tienda::findOrFail($id);
        $tienda->delete();

        return 204;
    }

    public function mostrarProductos($id)
    {
        event(new NuevaPeticion("Mostrar productos de una tienda"));
        $tienda = Tienda::find($id);
        return $tienda->obtenerProductos;
    }
}
