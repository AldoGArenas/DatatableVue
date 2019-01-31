<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class Vehiculo2 extends Model
{
	protected $connection = 'uatuipj';
	
    protected $table = 'vehiculo';

    protected $fillable = [
        'id', 'idTipifDelito', 'placas', 'idEstado', 'idSubmarca', 'modelo', 'nrpv', 'idColor', 'permiso', 'numSerie', 'numMotor', 'idTipoVehiculo', 'idTipoUso', 'senasPartic', 'idProcedencia', 'idAseguradora',
    ];

    public function tipifDelito()
    {
        return $this->belongsTo('App\Models\uatuipj\TipifDelito2');
    }
}