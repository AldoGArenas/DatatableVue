<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DisposicionVeh extends Model
{
    use SoftDeletes;

    public $table = 'disposicion_vehiculo';

    public $fillable = [
        'id',
        'idVehiculo',
        'idMunicipio',
        'idColonia',
        'domicilio',
        'fechaRecup',
        'recuperador',
    ];

    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo', 'idVehiculo', 'id');
    }
}
