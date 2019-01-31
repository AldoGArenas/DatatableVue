<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Determinacion extends Model
{
    const TRAMITE    = 1;
    const CONFIRMADO = 2;
    const REVOCADO   = 3;
    const MODIFICADO = 4;

    public $table = 'determinacion';

    public $fillable = [
        'id',
        'idCarpeta',
        'idUnidadDetermino',
        'idFiscalDetermino',
        'numFiscalDetermino',
        'idTipoDeterminacion',
        'fechaDeterminacion',
        'data',
        'idFiscal',
        'idUnidad',
        'unidad',
        'idJuzgado',
        'juzgado',
        'numConsignacion',
        'numCausaPenal',
        'fechaConsignacion',
        'fechaTurnadoJuzgado',
        'fechaTurnadoUnidad',
        'fechaEscrito',
        'resolucion',
        'tipoConsignacion',
        'remIncompetencia',
        'recurso',
        'activa',
    ];

    public function carpeta()
    {
        return $this->belongsTo('App\Models\Carpeta', 'idCarpeta', 'id');
    }

}
