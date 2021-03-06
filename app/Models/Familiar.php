<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $table = 'familiar';

    protected $fillable = [
        'id', 'idPersona', 'nombres', 'primerAp', 'segundoAp', 'parentesco', 'idOcupacion',
    ];

    public function ocupacion()
    {
        return $this->belongsTo('App\Models\CatOcupacion');
    }
}
