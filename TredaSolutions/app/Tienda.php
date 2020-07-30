<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = ['nombre'];

    public function obtenerProductos()
    {
        return $this->hasMany('App\Producto');
    }
}
