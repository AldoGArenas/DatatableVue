<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiculoRecuperado extends Model
{
    public $table = 'vehiculo_recuperado';

    public $fillable = [
        'id',
        'idVehiculo',
        'lugarRecup',
        'idMunicipio',
        'idColonia',
        'fechaRecup',
        'horaRecup',
        'recuperadoPor',
        'estadoUnidad',
        'observacionesUnidad',
        'entregado',
        'docRecup',
        'fechaDoc',
        'horaDoc',
        'idUnidadDoc',
        'idFiscalDoc',
    ];

    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo', 'idVehiculo', 'id');
    }

    
}
