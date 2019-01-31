<?php

namespace App\Models\dir;

use Illuminate\Database\Eloquent\Model;

class CatMunicipio extends Model
{
    protected $connection = 'component';

    public $table = 'cat_municipio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idEstado',
        'nombre'
    ];


    public function estado(){
        return $this->belongsTo('App\Models\dir\CatEstado');
    }

    public function domicilios(){
        return $this->hasMany('App\Models\Domicilio');
    }

    public function localidades(){
        return $this->hasMany('App\Models\dir\CatLocalidad');
    }

    public static function municipios($id){
        return CatMunicipio::select('id', 'nombre')->where('idEstado', '=', $id)->orderBy('nombre', 'ASC')->get();
    }

    
}
