<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultadoPeritajeVehiRecup extends Model
{
    public $table = 'resultados_peritaje_vehi_recup';

    public $fillable = [
        'idDiligencia',
        'idVehiRecuperado',
        'niva',
        'nivo',
        'motora',
        'motoro',
        'avaluo',
        'observaciones',
        'daños',
        'status',
    ];

    public function diligencia()
    {
        return $this->belongsTo('app/Models/DiligenciaSPVehiRecup');
    }
}
