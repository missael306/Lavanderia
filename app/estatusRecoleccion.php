<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estatusRecoleccion extends Model
{
    protected $table = "cat_estatus_recoleccion";

    protected $primaryKey = "idCatEstatusRecoleccion";

    protected $fillable = [
        "estatus",
    ];
}
