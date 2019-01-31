<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjetoCadenaCustodia extends Model
{
    protected $table = 'objeto_cadena_custodia';

    protected $fillable = [
        'id',
        'idCadenaCustodia',
        'unidad',
        'subtotal',
        'descripcion',
        'estadoOriginal',
    ];

    public function cadenaCustodia()
    {
        return $this->belongsTo('App\Models\CadenaCustodia');
    }
}
