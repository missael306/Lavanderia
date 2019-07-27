<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecoleccionDetalle extends Model
{
    protected $table = "recoleccion_detalle";

    protected $primaryKey = "id_recoleccion_detalle";

    protected $fillable = [
        "precio", "idCatArticulo", "idRecoleccion"
    ];

    public function Articulo()
    {
        return $this->belongsTo('App\Articulo','id_cat_articulo');
    }

    public function Recoleccion()
    {
        return $this->belongsTo('App\Recoleccion','id_recoleccion');
    }
}
