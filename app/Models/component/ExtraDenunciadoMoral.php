<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class ExtraDenunciadoMoral extends Model
{
    protected $connection = 'component';

    protected $table = 'extra_denunciado_moral';

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
