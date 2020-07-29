<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
}
