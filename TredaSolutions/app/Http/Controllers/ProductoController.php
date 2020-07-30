<?php

namespace App\Http\Controllers;

use App\Providers\NuevaPeticion;
use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        event(new NuevaPeticion("Mostrar todos los productos"));
        return Producto::all();
    }

    public function show($id)
    {
        event(new NuevaPeticion("Mostrar un producto."));
        return Producto::find($id);
    }

    public function store(Request $request)
    {
        $patronvalor = "/^[0-9]*$/i";
        $patronfecha = "/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/i";

        if((preg_match_all($patronvalor, $request->valor) != 0 ) && (preg_match($patronfecha, $request->fecha))){
            event(new NuevaPeticion("Guardar un producto."));
            $producto = new Producto;
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->valor = $request->valor;
            $producto->tienda_id = $request->tienda_id;
            $producto->imagen = base64_encode($request->imagen);
            $producto->save();
            return "Hecho";
        }else{
            return "Uno o varios de los valores es incorrecto";
        }
        
    }

    public function update(Request $request, $id)
    {
        event(new NuevaPeticion("Actualizar un producto."));
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return $producto;
    }

    public function delete(Request $request, $id)
    {
        event(new NuevaPeticion("Borrar un producto."));
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return 204;
    }
}
