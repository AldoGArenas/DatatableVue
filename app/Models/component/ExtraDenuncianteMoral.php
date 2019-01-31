<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;

class ExtraDenuncianteMoral extends Model
{
    protected $connection = 'component';

    public $table = 'extra_denunciante_moral';
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'idAbogado',
        'reguardarIdentidad',
        'victima'
    ];
}
