<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narracion extends Model
{
     public $table = 'narracion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idAparicion',
        'narracion',
        'archivo',

       
    ];

    public function variablesPersona(){
        return $this->belongsTo('App\Models\VariablesPersona');
    }
}
