<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuartil extends Model
{
    //
    protected $table = 'cuartil';

    protected $primaryKey = 'cuar_id';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['cuar_id','cuar_descripcion','cuar_codigo','cuar_estado'];
}
