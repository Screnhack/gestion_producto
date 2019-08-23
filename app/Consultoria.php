<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultoria extends Model
{
    //
    protected $table = 'producto_consultoria';

    protected $primaryKey = 'prco_id';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['prco_id','prco_titulo','prco_empresa','prco_ciudad','prco_fechainicio','prco_fechafinal','prco_tiempo','prco_restingido','prco_contrato','prco_archivocertificado','prco_archivocontrato','proy_id','inve_id'];
}
