<?php

namespace App\Models\dir;

use Illuminate\Database\Eloquent\Model;

class CatColonia extends Model
{
    protected $connection = 'component';

    protected $table = 'cat_colonia';

    protected $fillable = [
        'id', 'idMunicipio', 'nombre','codigoPostal',
    ];

    public function domicilios()
    {
        return $this->hasMany('App\Models\Domicilio');
    }

    public function municipio()
    {
        return $this->belongsTo('app/Models/dir/CatMunicipio');
    }

    public static function colonias($cp){
        return CatColonia::where('codigoPostal', '=', $cp)->orderBy('nombre', 'ASC')->get();
    }

    public static function colonias2($id){
        return CatColonia::where('idMunicipio', '=', $id)->orderBy('nombre', 'ASC')->get();
    }

    public static function codigos($id){
        return CatColonia::having('idMunicipio', '=', $id)->groupBy('codigoPostal')->get();
    }

    public static function codigos2($id){
        return CatColonia::where('id', '=', $id)->get();
    }
}
