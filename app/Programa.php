<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    //
    protected $table = 'programas';

    protected $primaryKey = 'prog_id';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['prog_id','prog_id','prog_descripcion','prog_codigo','prog_estado'];
}
