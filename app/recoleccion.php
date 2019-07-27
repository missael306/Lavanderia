<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recoleccion extends Model
{
    protected $table = "recoleccion";

    protected $primaryKey = "id_recoleccion";

    protected $fillable = [
        "folio", "fecha_recoleccion", "fecha_entrega", "id_punto_recoleccion", "id_cat_tipo_recoleccion", "id_cat_estatus_recoleccion", 
    ];

    public function Estatus()
    {
        return $this->belongsTo('App\EstatusRecoleccion','id_cat_estatus_recoleccion');
    }

    public function TipoRecoleccion()
    {
        return $this->belongsTo('App\TipoRecoleccion','id_cat_tipo_recoleccion');
    }

    public function Detalles()
    {
        return $this->hasMany('App\RecoleccionDetalle','id_recoleccion_detalle');
    }

    public function PuntoRecoleccion()
    {
        return $this->belongsTo('App\PuntoRecoleccion','id_punto_recoleccion');
    }
    
}
