<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
    
    CONST INVOLUCRADO = 1;
    CONST ROBADO = 2;
    CONST DISPOSICION = 3;

    protected $fillable = [
        'id', 'idTipifDelito', 'idPropietario', 'placas', 'idEstado', 'idSubmarca', 'modelo', 'nrpv', 'idColor', 'permiso', 'numSerie', 'numMotor', 'idTipoVehiculo', 'idTipoUso', 'senasPartic', 'idProcedencia', 'idAseguradora','numEconomico', 'situacion', 'recuperado'
    ];

    public function tipifDelito()
    {
        return $this->belongsTo('App\Models\TipifDelito');
    }

    public function estado()
    {
        return $this->belongsTo('App\Models\CatEstado');
    }

    public function submarca()
    {
        return $this->belongsTo('App\Models\CatSubmarca');
    }

    public function color()
    {
        return $this->belongsTo('App\Models\CatColor');
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo('App\Models\CatTipoVehiculo');
    }

    public function tipoUso()
    {
        return $this->belongsTo('App\Models\CatTipoUso');
    }

    public function procedencia()
    {
        return $this->belongsTo('App\Models\CatProcedencia');
    }

    public function aseguradora()
    {
        return $this->belongsTo('App\Models\CatAseguradora');
    }

    public function disposicionVeh()
    {
        return $this->hasOne('App\Models\DisposicionVeh', 'idVehiculo', 'id');
    }
}
