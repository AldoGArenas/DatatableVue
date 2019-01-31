<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class NumeroCancelado extends Model
{
    use SoftDeletes;

    public $table = 'numero_cancelado';

    public $fillable = [
        'id',
        'idUnidad',
        'consecuivo',
        'motivo'
    ];

    public function unidad()
    {
        return $this->belongsTo('App\Models\Unidad');
    }
}
