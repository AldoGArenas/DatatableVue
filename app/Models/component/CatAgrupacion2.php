<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class CatAgrupacion2 extends Model
{
    protected $connection = 'component';

    public $table = 'cat_agrupacion2';

    public $fillable = [
        'id',
        'nombre',
        'idAgrupacion1'
    ];

}
