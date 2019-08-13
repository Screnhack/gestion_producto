<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargaHoraria extends Model
{
    //
    protected $table = 'carga_horaria';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['caho_id','caho_codigo','caho_descripcion'];
}
