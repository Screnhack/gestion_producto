<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    //
    protected $table = 'software';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['prar_nombre','prar_publicacion','prar_anno','prar_numero','prar_columna','prar_paginas','prar_issn','prar_isbn','prar_pais','prar_fecha','prar_editorial','tipr_id','care_id','cuar_id'];
}
