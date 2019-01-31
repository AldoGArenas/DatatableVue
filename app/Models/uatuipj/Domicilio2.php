<?php

namespace App\Models\uatuipj;

use Illuminate\Database\Eloquent\Model;

class Domicilio2 extends Model
{
	protected $connection = 'uatuipj';
	
    protected $table = 'domicilio';

    protected $fillable = [
        'id', 'idMunicipio', 'idLocalidad', 'idColonia',  'calle', 'numExterno',  'numInterno',
    ];

    public function variablesPersonas()
    {
        return $this->hasMany('App\Models\uatuipj\VariablesPersona2');
    }

    public function notificaciones()
    {
        return $this->hasMany('App\Models\uatuipj\Notificacion2');
    }

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\uatuipj\TipifDelito2');
    }
}
