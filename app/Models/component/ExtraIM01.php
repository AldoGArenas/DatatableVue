<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class ExtraIM01 extends Model
{
    protected $connection = 'component';

    public $table = 'extra_im01';

    public $fillable = [
        'id',
        'idVariablesPersona',
        'declarado',
        'direccion',
        'cargo',
        'sector',
        'institucion'
    ];
}
