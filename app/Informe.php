<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    //
    protected $table = 'producto_informe_tecnico';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['prit_titulo','prit_empresa','prit_ciudad','prit_fechainicio','prit_fechafinal','prit_tiempo','prit_restingido','prit_contrato','prit_archivocertificado','proy_id','inve_id'];
}
