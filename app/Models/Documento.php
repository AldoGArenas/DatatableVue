<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    const FORMATO_INICIO = 1;
    const CONSTANCIA_HECHOS = 2;
    const DILIGENCIA_SP = 3;
    const DILIGENCIA_PM = 4;
    const CITATORIO_TES = 5;
    const CITATORIO_INV = 6;
    const INICIO_NOTICIA = 7;
    const DILIGENCIA_SP_OCCISO = 8;
    const REGISTRO_CIVIL_OCCISO = 9;
    const DATOS_COMPARECIENTE = 10;
    const ACUERDO_ENTREGA = 11;
    const CONSTANCIA_ENTREGA = 12;
    const DILIGENCIA_SP_VEHI_RECUP = 13;
    const FORMATO_IM01 = 14;
    const FORMATO_IM02 = 14;

    public $table = 'documentos';

    public $fillable = [
        'id',
        'idCarpeta',
        'idOficio',
        'idRelacion',
        'numOficio',
    ];

    public function carpeta()
    {
        return $this->belongsTo('App\Models\Carpeta');
    }

    public function oficio()
    {
        return $this->belongsTo('App\Models\Oficio');
    }
}
