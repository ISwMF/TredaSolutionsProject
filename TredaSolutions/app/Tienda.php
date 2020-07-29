<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    public function obtenerProductos()
    {
        return $this->hasMany('App\Producto');
    }
}
