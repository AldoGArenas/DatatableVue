<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadenaCustodia extends Model
{
    //motivo
    const APORTACION = 1;
    const DESCUBRIMIENTO = 2;
    const LOCALIZACION = 3;

    //tipoRecoleccion
    const MANUAL = 1;
    const INSTRUMENTAL = 2;

    //tipoEmbalaje
    const BOLSA = 1;
    const CAJA = 2;
    const RECIPIENTE = 3;

    //via
    const TERRESTRE = 1;
    const AEREA = 2;
    const MARITIMA = 3;

    public $table = 'cadena_custodia';

    public $fillable = [
        'id' ,
        'idCarpeta',
        'idAparicion',
        'fecha',
        'hora' ,
        'folio' ,
        'motivo' ,
        'docEscrito',
        'docFotografico',
        'docCroquis',
        'docOtro',
        'documento',
        'tipoRecoleccion',
        'tipoEmbalaje',
        'etapa',
        'trasladoVia',
        'trasladoCondicionesEspeciales',
        'recomendaciones',
        'totalObjetos',
        'idUsuarioInicio',
        'idUsuarioPortador',
    ];


    public function historial()
    {
        return $this->hasMany('App\Models\HisotorialCadenaCustodia');
    }

    public function objeto()
    {
        return $this->hasMany('App\Models\ObjetoCadenaCustodia');
    }

    public function usuarios(){
        return $this->belongsToMany('App\User', 'cadena_custodia_user', 'idCadenaCustodia', 'idUser');
    }
}
