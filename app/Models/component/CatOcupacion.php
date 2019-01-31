<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class CatOcupacion extends Model
{
    protected $connection = 'component';

    public $table = 'cat_ocupacion';

    public $fillable = [
        'id',
        'nombre'
    ];

}
