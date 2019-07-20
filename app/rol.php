<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = "cat_rol";

    protected $primaryKey = "idCatRol";

    protected $fillable = [
        "rol",
    ];
}
