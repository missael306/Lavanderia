<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "cat_rol";

    protected $primaryKey = "id_cat_rol";

    protected $fillable = [
        "rol",
    ];

    public function Usuarios()
    {
        return $this->hasMany('App\User','id_user');
    }
}
