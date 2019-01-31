<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class ExtraAutoridad extends Model
{
    protected $connection = 'component';
    
    protected $table = 'extra_autoridad';

    protected $fillable = [
        'id', 
        'idVariablesPersona', 
        'antiguedad', 
        'rango', 
        'corporacion',
        'horarioLaboral'
    ];
}
