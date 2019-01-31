<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{

    const UIPJ                    = 1;
    const UAT                     = 2;
    const ESPECIALIZADA_MUJERES   = 3;
    const ESPECIALIZADA_SEXUALES  = 4;
    const ESPECIALIZADA_ANIMALES  = 5;
    const ESPECIALIZADA_MIGRANTES = 6;
    const ESPECIALIZADA_JUVENIL   = 7;
    const ESPECIALIZADA_DESAP     = 8;
    const ESPECIALIZADA_IDH       = 9;

    public $table = 'unidad';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id',
        'idDistrito',
        'idRegion',
        'tipo',
        'clave',
        'nombre',
        'direccion',
        'latitud',
        'longitud',
        'telefono',
        'abrevMun',
        'nomCompleto',
        'consecutivo',
    ];

    public function carpetas()
    {
        return $this->hasMany('App\Models\Carpeta');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'id', 'idUnidad');
    }

    public function distrito()
    {
        return $this->belongsTo('App\Models\Distrito', 'idDistrito');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'idRegion');
    }

}
