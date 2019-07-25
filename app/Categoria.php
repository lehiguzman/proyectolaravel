<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

	protected $table = "categorias";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'condicion'
    ];

   /**
    * Categoria has many Productos.
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function productos()
   {      
       return $this->hasMany("App\Producto");
   }
}
