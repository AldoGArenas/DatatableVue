<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aoficio extends Model
{
    protected $table = 'oficios';

    protected $fillable = [
        'id', 'nombre', 'encabezado', 'contenido', 'pie', 'unidad'
    ];
}
