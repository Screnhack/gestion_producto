<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    //
    protected $table = 'detalle';

    protected $primaryKey = 'deta_id';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['deta_id','deta_nombre','deta_publicacion','deta_anno','deta_numero','deta_columna','deta_paginas','deta_issn','deta_isbn','deta_pais','deta_fecha','deta_editorial','tipr_id','care_id','cuar_id'];
}
