<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    public $table = 'anexos';

    public $fillable = [
        'id',
        'idCarpeta',
        'nombre',
        'numPaginas',
        'descripcion'
    ];

    public function carpeta(){
        return $this->belongsTo('App\Models\Carpeta');
    }

    public function archivosAnexos(){
        return $this->hasMany('App\Models\ArchivoAnexo');
    }
}
