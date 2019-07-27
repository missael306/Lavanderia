<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "cat_articulos";

    protected $primaryKey = "id_cat_articulo";

    protected $fillable = [
        "articulo","precio",
    ];

    public function Detalles()
    {
        return $this->hasMany('App\RecoleccionDetalle','id_recoleccion_detalle');
    }
}
