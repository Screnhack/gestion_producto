<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipologiaProducto extends Model
{
    //
    protected $table = 'tipologia_producto';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['tipr_descripcion','tipr_codigo','tipr_estado'];
}
