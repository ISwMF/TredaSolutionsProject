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
        Tienda::create($request->all());
        return response()->json(['respuesta' => 'hecho']);
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

    public function mostrarProductosEnVista($id)
    {
        session_start();
        $idAux = $_SESSION["id_actual"];
        if ($idAux != null && $idAux == $id) {
            $tienda = Tienda::find($id);
            $prod = $tienda->obtenerProductos;
            return view('productos-tiendas', ['productos' => $prod, 'tienda' => $tienda]);
        } else {
            return redirect('home');
        }
    }

    public function mostrarTiendas(){
        $tiendas = Tienda::all();
        return view('agregarproducto', ['tiendas' => $tiendas]);
    }
}
