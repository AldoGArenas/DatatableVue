<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;
use App;

class Persona extends Model
{
    protected $connection = 'component';
    
    protected $table = 'persona_fisica';

    protected $fillable = [
        'id', 
        'nombres', 
        'primerAp', 
        'segundoAp', 
        'fechaNacimiento', 
        'rfc', 
        'curp', 
        'sexo', 
        'idNacionalidad', 
        'idEtnia', 
        'idLengua', 
        'idMunicipioOrigen'
    ];
}
