<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    //
    protected $table = 'software';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = [];
}
