<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigador extends Model
{
    //
    protected $table = 'investigador';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['inve_nombre','inve_apellido','inve_email','inve_researchgate','inve_orcid','inve_scopus','inve_googleacademico','inve_researchid','inve_paisafiliacion','inve_numeroafiliacion','inve_horasinvestigacion','caho_id','caco_id','depe_id','prog_id','capr_id'];
}
