<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatJuzgado extends Model
{
    public $table = 'cat_juzgado';

    public $fillable = [
        'idClave',
        'municipio',
        'tipo',
        'nombre'
    ];


}
