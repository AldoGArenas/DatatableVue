<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Models\Auxiliar;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatColor;
use App\Models\Unidad;
use App\Models\CadenaCustodia;
use App\Models\ControlCarpeta;
use App\Models\NumeroCancelado;
use App\Models\ObjetoCadenaCustodia;
use App\Models\Documento;
use App\Models\Anexo;
use App\Models\Acusacion;
use App\Models\CatTipoDeterminacion;
use App\Notifications\NewNotification;
use App\Models\Notificacion;

class CarpetaController extends Controller
{
    public function index(){

      $nivel = 8;
      $idFiscal = 1;
      $unidad = 11;

          $query = DB::table('carpeta')
          ->leftJoin('historial_carpeta', 'historial_carpeta.idCarpeta', '=', 'carpeta.id')
          ->join('control_carpeta', 'control_carpeta.idCarpeta', '=', 'carpeta.id')
          ->join('unidad', 'unidad.id', '=', 'control_carpeta.idUnidad')
          ->join('users', 'users.id', '=', 'control_carpeta.idFiscal')
          ->leftjoin('acusacion','acusacion.idCarpeta','control_carpeta.id')
          ->select(DB::raw(''.$nivel.' as nivel'),DB::raw('ifnull(sum(case when acusacion.acuerdoFirmado=1 then 1 else 0 end),0) as acuerdo'),'control_carpeta.estado','control_carpeta.id as idControlCarpeta','carpeta.id', 'unidad.nombre as nombreUnidad', DB::raw('CONCAT(users.nombres, " ", ifnull(users.apellidos,"")) AS nombreFiscal'), 'users.numFiscal', 'carpeta.numCarpeta', 'carpeta.estadoCarpeta',DB::raw("DATE_FORMAT(carpeta.fechaInicio,'%d/%m/%Y') AS fechaInicio"), 'carpeta.created_at')  ;


          $carpetas = $query->orderBy('id', 'DESC');

      $carpetas = $carpetas->groupBy('carpeta.id')->get();
      // dd($carpetas);

      return view('welcome')->with('carpetas',$carpetas);

    }
    public function index2(){

      return view('table');

    }

    public static function getCarpetas(){
        $nivel = 8;
        $idFiscal = 1;
        $unidad = 11;

            $query = DB::table('carpeta')
            ->leftJoin('historial_carpeta', 'historial_carpeta.idCarpeta', '=', 'carpeta.id')
            ->join('control_carpeta', 'control_carpeta.idCarpeta', '=', 'carpeta.id')
            ->join('unidad', 'unidad.id', '=', 'control_carpeta.idUnidad')
            ->join('users', 'users.id', '=', 'control_carpeta.idFiscal')
            ->leftjoin('acusacion','acusacion.idCarpeta','control_carpeta.id')
            ->select(DB::raw(''.$nivel.' as nivel'),DB::raw('ifnull(sum(case when acusacion.acuerdoFirmado=1 then 1 else 0 end),0) as acuerdo'),'control_carpeta.estado','control_carpeta.id as idControlCarpeta','carpeta.id', 'unidad.nombre as nombreUnidad', DB::raw('CONCAT(users.nombres, " ", ifnull(users.apellidos,"")) AS nombreFiscal'), 'users.numFiscal', 'carpeta.numCarpeta', 'carpeta.estadoCarpeta',DB::raw("DATE_FORMAT(carpeta.fechaInicio,'%d/%m/%Y') AS fechaInicio"), 'carpeta.created_at')  ;


            $carpetas = $query->orderBy('id', 'DESC');

        $carpetas = $carpetas->groupBy('carpeta.id')->limit(100)->get();
        // dd($carpetas);
        return $carpetas;
    }

}
