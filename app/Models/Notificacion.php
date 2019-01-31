<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
     public $table = 'notificaciones';

    public $fillable = [
        'id',
        'user_id',
        'titulo',
        'contenido',
        'url',
    ];
}
