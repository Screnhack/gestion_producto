<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $table = 'articulos';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = [];
}
