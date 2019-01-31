<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadenaCustodiaUser extends Model
{
  public $table = 'cadena_custodia_user';


 public $fillable = [
     'id',
     'idCadenaCustodia',
     'idUser',
     'idHistorialCadenaCustodia',
     'estado'
  ];
}
