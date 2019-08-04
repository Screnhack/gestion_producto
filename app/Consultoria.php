<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultoria extends Model
{
    //
    protected $table = 'consultoria';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['cons_nombre','cons_publicacion','cons_anno','cons_numero','cons_columna','cons_paginas','cons_issn','cons_isbn','cons_pais','cons_fecha','cons_editorial','tipr_id','care_id','cuar_id'];
}
