<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusRecoleccion extends Model
{
    protected $table = "cat_estatus_recoleccion";

    protected $primaryKey = "id_cat_estatus_recoleccion";

    protected $fillable = [
        "estatus",
    ];

    public function Recolecciones()
    {
        return $this->hasMany('App\Recoleccion','id_recoleccion');
    }
}
