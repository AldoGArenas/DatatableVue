<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;
use App;

class VariablesPersonaMoral extends Model
{
    protected $connection = 'component';

    public $table = 'variables_persona_moral';
    
    public $fillable = [
        'id',
        'idPersona',
        'telefono',
        'nombreRep',
        'primerApRep',
        'segundoApRep',
        'docIdentificacion',
        'numDocIdentificacion',
        'idDomicilio',
        'idNotificacion'
    ];    
}
