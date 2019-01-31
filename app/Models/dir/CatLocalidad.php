<?php

namespace App\Models\dir;

use Illuminate\Database\Eloquent\Model;

class CatLocalidad extends Model
{
    protected $connection = 'component';

    protected $table = 'cat_localidad';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre',
    ];

    public function municipio(){
    	return $this->belongsTo('App\Models\dir\CatMunicipio');
    }

    public function domicilios(){
    	return $this->hasMany('App\Models\Domicilio');
    }

    public static function localidades($id){
        return CatLocalidad::select('id', 'nombre')->where('idMunicipio', '=', $id)->orderBy('nombre', 'ASC')->get();
    }
}
