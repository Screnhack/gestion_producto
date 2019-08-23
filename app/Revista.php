<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    //
    protected $table = 'revista';

    protected $primaryKey = 'revi_id';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['revi_id','revi_descripcion','revi_codigo','revi_estado'];
}
