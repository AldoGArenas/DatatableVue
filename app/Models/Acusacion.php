<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acusacion extends Model
{
    public $table = 'acusacion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     CONST DELITOS_VRR=[60,63,65,66];
     CONST DELITOS_DESAP=[29];
     CONST INCIDENCIA=70;

    public $fillable = [
        'id',
        'idCarpeta',
        'idDenunciante',
        'idTipifDelito',
        'idDenunciado',
        'acuerdoFirmado',
        'pendienteVrr'
    ];


    public function carpeta(){
        return $this->belongsTo('App\Models\Carpeta');
    }

    public function tipifDelito(){
        return $this->hasOne('App\Models\TipifDelito');
    }

    public function diligencias(){
        return $this->hasMany('App\Models\DiligenciaSP');
    }

}
