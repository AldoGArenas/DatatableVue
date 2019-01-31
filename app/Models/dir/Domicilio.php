<?php

namespace App\Models\dir;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilio';

    protected $fillable = [
        'id', 'idMunicipio', 'idLocalidad', 'idColonia', 'localidad', 'colonia',  'calle', 'numExterno',  'numInterno',
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Models\dir\CatMunicipio');
    }

    public function localidad()
    {
        return $this->belongsTo('App\Models\dir\CatLocalidad');
    }


    public function colonia()
    {
        return $this->belongsTo('App\Models\dir\CatColonia');
    }
}
