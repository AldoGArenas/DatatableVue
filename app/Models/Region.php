<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $table = 'region';

    public $fillable = [
        'id',
        'region',

    ];
    public function unidades()
    {
        return $this->hasMany('App\Models\Unidad','idRegion');
    }
    public function distritos()
    {
        return $this->belongsTo('App\Models\Distrito');
    }
    public function fiscales()
    {
        return $this->hasManyThrough('App\User','App\Models\Unidad', 'idRegion','idUnidad');
    }

    public static function getDistritos($idRegion){
        return Region::join('distrito','distrito.idRegion','=','region.id')->select('distrito.id', 'distrito.distrito')->where('distrito.idRegion', '=', $idRegion)->orderBy('distrito', 'ASC')->get();
    }
}
