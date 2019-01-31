<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class CatTipoDeterminacion extends Model
{
    protected $connection = 'component';

    public $table = 'cat_tipo_determinacion';

    public $fillable = [
        'id', 'nombre', 'sistema'
    ];
}
