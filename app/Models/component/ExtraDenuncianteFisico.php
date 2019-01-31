<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;
use App;


class ExtraDenuncianteFisico extends Model
{
    protected $connection = 'component';

    public $table = 'extra_denunciante_fisico';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idVariablesPersona',
        'idAbogado',
        'reguardarIdentidad',        
        'victima',
        'alias'
    ];
}
