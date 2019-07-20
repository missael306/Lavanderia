<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoRecoleccion extends Model
{
    protected $table = "cat_tipo_recoleccion";

    protected $primaryKey = "idCatTipoRecoleccion";

    protected $fillable = [
        "tipoRecoleccion",
    ];
}
