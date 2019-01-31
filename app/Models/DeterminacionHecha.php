<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeterminacionHecha extends Model
{
    public $table = 'determinaciones_hechas';

    protected $fillable = [
        'id',
        'idUsuario',
        'idCarpeta',
        'idDeterminacion',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function carpeta(){
        return $this->belongsTo(Carpeta::class);
    }

    public function determinacion(){
        return $this->belongsTo(Determinacion::class);
    }
}
