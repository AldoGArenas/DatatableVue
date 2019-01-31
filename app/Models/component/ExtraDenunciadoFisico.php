<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciadoFisico extends Model
{
    protected $connection = 'component';

    protected $table = 'extra_denunciado_fisico';

    protected $fillable = [
        'id', 
        'idVariablesPersona', 
        'idPuesto', 
        'alias', 
        'senasPartic', 
        'ingreso', 
        'periodoIngreso', 
        'residenciaAnterior', 
        'idAbogado', 
        'personasBajoSuGuarda', 
        'perseguidoPenalmente', 
        'vestimenta'
    ];
}
