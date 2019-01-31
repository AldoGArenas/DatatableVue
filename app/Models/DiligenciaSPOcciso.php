<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiligenciaSPOcciso extends Model
{
    public $table = 'diligencias_sp_occisos';

    public $fillable = [
        'id', 'idCarpeta',  'idRegion', 'numOficio', 'unidadTermino', 'cantidadTermino', 'materias', 'status', 'observaciones', 'arrayOccisos', 'numSolicitud'
    ];

    public function carpeta()
    {
        return $this->belongsTo('app/Models/Carpeta');
    }

    public function resultados()
    {
        return $this->hasMany('app/Models/ResultadoPeritaje');
    }
}
