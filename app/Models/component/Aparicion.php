<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class Aparicion extends Model
{
    protected $connection = 'component';

    protected $table='apariciones';
    
    protected $fillable = [
        'id', 
        'idVarPersona', 
        'idCarpeta',
        'carpeta',
        'sistema',
        'tipoInvolucrado',
        'subtipoInvolucrado',
        'nuc',
        'esEmpresa',
		'activo',
        'idTipoDeterminacion'
    ];
}
