<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    public $table = 'distrito';

    public $fillable = [
        'id',
        'idRegion',
        'distrito',
    ];

    public function regiones()
    {
        return $this->hasMany('App\Models\Region');
    }

    public function unidades()
    {
        return $this->hasMany('App\Models\Unidad','id','idDistrito');
    }

    public static function getUnidades($idDistrito){
        return Distrito::join('unidad','unidad.idDistrito','=','distrito.id')->select('unidad.id', 'unidad.nombre')->where('unidad.idDistrito', '=', $idDistrito)->orderBy('nombre', 'ASC')->get();
    }
}
