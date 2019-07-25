<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
     protected $table = "proveedores";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'tipo_documento', 'num_documento','direccion','telefono','email'
    ];
}
