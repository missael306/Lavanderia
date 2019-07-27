<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuntoRecoleccion extends Model
{
    protected $table = "puntos_recoleccion";

    protected $primaryKey = "id_punto_recoleccion";

    protected $fillable = [
        "calle","codigoPostal","numeroExterior","numeroInterior","referencia","idUsuario"
    ];

    public function Usuario()
    {
        return $this->belongsTo('App\User','id_user');        
    }

    public function Recolecciones()
    {
        return $this->hasMany('App\Recoleccion','id_recoleccion');
    }
}

