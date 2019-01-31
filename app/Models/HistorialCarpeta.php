<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialCarpeta extends Model
{
  public $table = 'historial_carpeta';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  public $fillable = [
    'idCarpeta',
    'idUnidadOrigen',
    'idFiscalOrigen',
    'idUnidadReceptora',
    'idFiscalReceptor',
    'fechaTurnado',
    'motivo',
    'numCarpetaOrigen',
    'numCarpetaNuevo',
    'fechaRecibida',
    'idResponsable',
    'idAsigno'
  ];

  public function carpeta()
  {
      return $this->belongsTo('app/Models/Carpeta');
  }

  public function unidad()
  {
      return $this->belongsTo('app/Models/Unidad');
  }

  public function fiscal()
  {
      return $this->belongsTo('app/User');
  }
}
