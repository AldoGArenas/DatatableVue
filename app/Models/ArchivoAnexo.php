<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivoAnexo extends Model
{
    public $table = 'archivos_anexos';

    public $fillable = [
        'id',
        'idAnexo',
        'descripcion'
    ];

    public function anexo(){
        return $this->belongsTo('App\Models\Anexo');
    }
}
