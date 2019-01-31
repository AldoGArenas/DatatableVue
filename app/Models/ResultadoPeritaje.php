<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultadoPeritaje extends Model
{
    public $table = 'resultados_peritaje';
    
    public $fillable = [
        'id', 'idDiligencia', 'idOcciso', 'status', 'nombrePerito', 'cedulaPerito', 'causaMuerte', 'diagnosticoMuerte', 'numCertificado'
    ];

    public function diligencia()
    {
        return $this->belongsTo('app/Models/DiligenciaSPOcciso');
    }
}
