<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class CatAgrupacion1 extends Model
{
    protected $connection = 'component';

    public $table = 'cat_agrupacion1';

    public $fillable = [
        'id',
        'nombre',
        'idCatDelito'
    ];

}
