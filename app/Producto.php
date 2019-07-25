<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idcategoria', 'codigo', 'nombre','precio_venta','stock','condicion'
    ];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }
}
