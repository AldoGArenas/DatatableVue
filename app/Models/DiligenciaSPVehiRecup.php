<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiligenciaSPVehiRecup extends Model
{
    public $table = 'diligencias_sp_vehi_recup';

    public $fillable = [
        'id',
        'idCarpeta',
        'idRegion',
        'numOficio',
        'unidadTermino',
        'cantidadTermino',
        'materias',
        'status',
        'arrayVehiRecup',
        'numSolicitud',
        'idSolicitud'
    ];

    public function carpeta()
    {
        return $this->belongsTo('app/Models/Carpeta');
    }

    public function resultados()
    {
        return $this->hasMany('app/Models/ResultadoPeritajeVehiRecup');
    }
}
