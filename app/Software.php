<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    //
    protected $table = 'producto_software';

    protected $primaryKey = 'prso_id';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['prso_id','prso_nombre','prso_nombrecomercial','prso_anno','prso_mes','prso_pais','prso_ciudad','prso_disponibilidad','prso_radicado','proy_id','prso_contrato','prso_archivocertificado','prso_archivoacta','inve_id'];
}
