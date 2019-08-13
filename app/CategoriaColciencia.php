<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaColciencia extends Model
{
   //
   protected $table = 'categoria_colciencias';
   /* campos que seran  traidos de la base de datos para generar la interaccion */
   protected $fillable = ['caco_id','caco_descripcion','caco_codigo','caco_estado'];
}
