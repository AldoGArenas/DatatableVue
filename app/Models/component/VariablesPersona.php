<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;
use App;

class VariablesPersona extends Model
{
    protected $connection = 'component';

    public $table = 'variables_persona_fisica';
    
    public $fillable = [
        'id',
        'idPersona',
        'edad',
        'telefono',
        'motivoEstancia',
        'idOcupacion',
        'idEstadoCivil',
        'idEscolaridad',
        'idReligion',
        'docIdentificacion',
        'idInterprete',
        'numDocIdentificacion',
        'idDomicilio',
        'idTrabajo',
        'idNotificacion'
    ];
}
