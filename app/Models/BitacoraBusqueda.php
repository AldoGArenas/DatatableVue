<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BitacoraBusqueda extends Model
{
    //
    
public $table = 'bitacora_busqueda';
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public $fillable = [
        'id',
        'idUsuario',
        'descripcion',
    ];



 public function user(){
        return $this->belongsTo('App\User');
    }

}
