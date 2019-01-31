<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPMinisterial extends Model
{
    protected $connection = 'component';

    public $table = 'mi_mandamientos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'id',
        'nombre',
        'tipoMandamiento'
    ];
}
