<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalidadRevista extends Model
{
    //
    protected $table = 'calidad_revista';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['care_descripcion','care_codigo','care_estado'];
}
