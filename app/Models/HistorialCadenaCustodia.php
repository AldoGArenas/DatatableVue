<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialCadenaCustodia extends Model
{
    public $table = 'historial_cadena_custodia';

    public $fillable = [
        'id' ,
        'idCadenaCustodia',
        'fechaEntrega',
        'horaEntrega',
        'nombreEntrega',
        'idEntrega',
        'institucionEntrega',
        'cargoEntrega',
        'propositoEntrega',
        'observacionesEntrega',
        'fechaRecepcion',
        'horaRecepcion',
        'idAutoridadRecibe',
        'idUnidadRecibe',
        'cargoAutoridadRecibe',
        'propositoRecibe',
        'observacionesRecibe',
        'fueRecibido',
        'fueEnviado'
    ];

    public function cadenaCustodia()
    {
        return $this->belongsTo('App\Models\CadenaCustodia');
    }
    public function unidades()
    {
        return $this->belongsTo('App\Models\Unidad');
    }
    public function fiscal()
    {
        return $this->belongsTo('app\User');
    }
}
