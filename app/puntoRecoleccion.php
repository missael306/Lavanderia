<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntoRecoleccion extends Model
{
    protected $table = "puntos_recoleccion";

    protected $primaryKey = "idPuntoRecoleccion";

    protected $fillable = [
        "calle","codigoPostal","numeroExterior","numeroInterior","referencia","idUsuario"
    ];
}
