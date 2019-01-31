<?php

namespace App\Models\dir;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $connection = 'component';

    protected $table = 'cat_estado';

    protected $fillable = [
        'id', 'nombre', 'abreviatura',
    ];

    public function municipios(){
    	return $this->hasMany('App\Models\dir\CatMunicipio');
    }

    public function vehiculos(){
    	return $this->hasMany('App\Models\Vehiculo');
    }
}
