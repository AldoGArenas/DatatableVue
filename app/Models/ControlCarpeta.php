<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControlCarpeta extends Model
{
  public $table = 'control_carpeta';

  const INICIADAS = 1;
  const UAT = 2;
  const TURNADAS = 3;      // cuando una carpeta aun no se le envia a algun fiscal (aplica solo cuando se manda a otra unidad sin un fiscal en especifico)
  const TURNADAS_PA = 5; // cuando una carpeta se encuentra lista para ser aceptada por X fiscal
  const ASIGNADAS = 4;   // cuando el fiscal ya aceptó la carpeta
  const CANCELADA = 6;
  const ACUERDOS = 7;
  const IM01 = 8;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  public $fillable = [
    'idCarpeta',
    'idUnidad',
    'idFiscal',
    'estado'
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
