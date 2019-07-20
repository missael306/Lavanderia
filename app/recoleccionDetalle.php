<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recoleccionDetalle extends Model
{
    protected $table = "recoleccion_detalle";

    protected $primaryKey = "idRecoleccionDetalle";

    protected $fillable = [
        "precio", "idCatArticulo", "idRecoleccion"
    ];
}
