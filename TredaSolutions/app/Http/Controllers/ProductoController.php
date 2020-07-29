<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::all();
    }

    public function show($id)
    {
        return Producto::find($id);
    }

    public function store(Request $request)
    {
        return Producto::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return $producto;
    }

    public function delete(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return 204;
    }

    public function testing(){

    }
}
