<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre'];
    
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
}
