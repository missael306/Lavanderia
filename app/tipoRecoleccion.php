<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRecoleccion extends Model
{
    protected $table = "cat_tipo_recoleccion";

    protected $primaryKey = "id_cat_tipo_recoleccion";

    protected $fillable = [
        "tipo_recoleccion",
    ];

    public function Recolecciones()
    {
        return $this->hasMany('App\Recoleccion','id_recoleccion');
    }
}
