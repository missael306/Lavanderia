<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recoleccion extends Model
{
    protected $table = "recoleccion";

    protected $primaryKey = "idRecoleccion";

    protected $fillable = [
        "folio", "fechaRecoleccion", "fechaEntrega", "idPuntoRecoleccion", "idCatTipoRecoleccion", "idCatEstatusRecoleccion", 
    ];
    
}
