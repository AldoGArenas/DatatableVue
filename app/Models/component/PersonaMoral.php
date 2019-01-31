<?php

namespace App\Models\component;

use Illuminate\Database\Eloquent\Model;
use App;

class PersonaMoral extends Model
{
    protected $connection = 'component';
    
    protected $table='persona_moral';

    protected $fillable=[
        'id',
        'nombre',
        'fechaCreacion',
        'rfc'
    ];   
}
