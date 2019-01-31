<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class CatDelito extends Model
{
    protected $connection = 'component';

    public $table = 'cat_delito';

    public $fillable = [
        'id',
        'nombre',
    ];

    public function tipifDelitos()
    {
        return $this->hasMany('App\Models\TipifDelito', 'idDelito', 'id');
    }

}
