<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carpeta extends Model
{
    use SoftDeletes;

    public $table = 'carpeta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id',
        'numFiscal',
        'numConsecutivo',
        'numCarpeta',
        'fechaInicio',
        'horaInicio',
        'conDetenido',
        'validado',
        'conNoticiaCriminal',
        'conIph',
        'noticiaCrim',
        'esRelevante',
        'tipoUnidad',
        'estadoCarpeta',
        'horaIntervencion',
        'descripcionHechos',
        'descRelevancia',
        'npd',
        'numIph',
        'fechaIph',
        'narracionIph',
        'idTipoDeterminacion',
        'fechaDeterminacion',
        'asignadaUat',
    ];

    public function determinaciones()
    {
        return $this->hasMany('App\Models\Determinacion', 'idCarpeta', 'id');
    }

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito', 'idCarpeta', 'id');
    }

    public function acusaciones()
    {
        return $this->hasMany('app/Models/Acusacion');
    }

    public function acumulaciones()
    {
        return $this->hasMany('app/Models/Acumulacion');
    }

    public function variablesPersona()
    {
        return $this->hasMany('app/Models/VariablesPersona');
    }

    public function tipoDeterminacion()
    {
        return $this->belongsTo('app/Models/CatTipoDeterminacion');
    }

    public function citatorios()
    {
        return $this->hasMany('App\Models\Citatorio');
    }

    public function anexos()
    {
        return $this->hasMany('App\Models\Anexo');
    }

    public function documentos()
    {
        return $this->hasMany('App\Models\Documento');
    }

    public function diligenciasSPOccisos()
    {
        return $this->hasMany('app/Models/DiligenciaSPOcciso');
    }
}
