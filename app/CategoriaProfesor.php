<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProfesor extends Model
{
    //
    protected $table = 'categoria_profesor';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['capr_descripcion','capr_codigo','capr_estado'];
}
