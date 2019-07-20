<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    protected $table = "cat_articulos";

    protected $primaryKey = "idCatArticulo";

    protected $fillable = [
        "articulo","precio",
    ];
}
