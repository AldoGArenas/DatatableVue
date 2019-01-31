<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiligenciaPM extends Model
{
    const REINTENTAR = 1;
    const REGISTRADA = 2;
    const ASIGNADA = 3;
    const EN_PROCESO = 4;
    const REALIZADA = 5;
    const PENDIENTE = 6;
    const RECHAZADA = 7;
    const TURNADA = 8;
    const CUMPLIDA_PARCIAL = 9;

    public $table = 'diligencias_pm';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id', 'idAcusacion', 'idMunicipio', 'numOficio', 'unidadTermino', 'cantidadTermino', 'mandamientos', 'status', 'observaciones', 'numSolicitud'
   ];

    public function acusacion()
    {
        return $this->belongsTo('app/Models/Acusacion');
    }
}
