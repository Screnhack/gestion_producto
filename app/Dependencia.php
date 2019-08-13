<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    //
    protected $table = 'dependencias';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['depe_id','depe_descripcion','depe_codigo','depe_estado'];
}
