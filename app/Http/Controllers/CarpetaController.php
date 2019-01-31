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

      // $nivel = 8;
      // $idFiscal = 1;
      // $unidad = 11;
      //
      //     $query = DB::table('carpeta')
      //     ->leftJoin('historial_carpeta', 'historial_carpeta.idCarpeta', '=', 'carpeta.id')
      //     ->join('control_carpeta', 'control_carpeta.idCarpeta', '=', 'carpeta.id')
      //     ->join('unidad', 'unidad.id', '=', 'control_carpeta.idUnidad')
      //     ->join('users', 'users.id', '=', 'control_carpeta.idFiscal')
      //     ->leftjoin('acusacion','acusacion.idCarpeta','control_carpeta.id')
      //     ->select(DB::raw(''.$nivel.' as nivel'),DB::raw('ifnull(sum(case when acusacion.acuerdoFirmado=1 then 1 else 0 end),0) as acuerdo'),'control_carpeta.estado','control_carpeta.id as idControlCarpeta','carpeta.id', 'unidad.nombre as nombreUnidad', DB::raw('CONCAT(users.nombres, " ", ifnull(users.apellidos,"")) AS nombreFiscal'), 'users.numFiscal', 'carpeta.numCarpeta', 'carpeta.estadoCarpeta',DB::raw("DATE_FORMAT(carpeta.fechaInicio,'%d/%m/%Y') AS fechaInicio"), 'carpeta.created_at')  ;
      //
      //
      //     $carpetas = $query->orderBy('id', 'DESC');
      //
      // $carpetas = $carpetas->groupBy('carpeta.id')limit(200)->get();

      $db1 = config('app.UIPJ_DATABASE');
      $db2 = config('app.COMPONENT_DATABASE');
      $denunciadosFis = DB::table($db1.'.carpeta')
          ->join($db1.'.control_carpeta', 'control_carpeta.idCarpeta', '=', 'carpeta.id')
          ->join($db1.'.unidad', 'unidad.id', '=', 'control_carpeta.idUnidad')
          ->join($db1.'.users', 'users.id', '=', 'control_carpeta.idFiscal')
          ->join($db1.'.tipif_delito','carpeta.id','tipif_delito.idCarpeta')
          ->join($db2.'.cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
          ->join($db2.'.apariciones', 'apariciones.idCarpeta', '=', 'carpeta.id')
          ->join($db2.'.variables_persona_fisica AS varper','varper.id','apariciones.idVarPersona')
          ->join($db2.'.persona_fisica AS per', 'per.id', 'varper.idPersona')
          ->join($db2.'.sexos as sex','per.sexo','sex.id')
          ->join($db2.'.cat_municipio','per.idMunicipioOrigen', 'cat_municipio.id')
          ->join($db2.'.cat_estado','cat_municipio.idEstado', 'cat_estado.id')
          //->join($db2.'.extra_im01 as extra','extra.idVariablesPersona', 'varper.id')
          ->join($db2.'.cat_ocupacion','varper.idOcupacion', 'cat_ocupacion.id')
          ->join($db2.'.cat_escolaridad','varper.idEscolaridad', 'cat_escolaridad.id')
          ->select('carpeta.numCarpeta', 'unidad.nombre as unidad', 'unidad.clave', 'unidad.municipio', 'carpeta.numFiscal', 'carpeta.numConsecutivo', DB::raw('CONCAT(users.nombres, " ", ifnull(users.apellidos,"")) AS nombreFiscal'), DB::raw("DATE_FORMAT(carpeta.fechaInicio,'%d/%m/%Y') AS fechaInicio"), 'carpeta.estadoCarpeta', DB::raw("DATE_FORMAT(carpeta.created_at,'%d/%m/%Y') AS fechaCaptura"), DB::raw(' group_concat(CASE WHEN tipif_delito.idDelito = 123 THEN tipif_delito.delito ELSE cat_delito.nombre END SEPARATOR ", " ) AS delito'), DB::raw('CONCAT(per.nombres, " ", case when per.primerAp="SIN INFORMACIÓN" THEN " " ELSE per.primerAp END, " ", case when per.segundoAp="SIN INFORMACIÓN" THEN " " WHEN per.segundoAp IS NULL THEN "" ELSE per.segundoAp  END) AS nombre'), 'varper.edad', 'sex.nombre as sexo', 'cat_estado.nombre as estadoOrigen', 'varper.telefono', 'cat_ocupacion.nombre as ocupacion', 'cat_escolaridad.nombre AS escolaridad', 'apariciones.subtipoInvolucrado')
          ->where([
              'apariciones.sistema' => 'uipj',
              'apariciones.esEmpresa' => 0,
              //'apariciones.tipoInvolucrado' => 'DENUNCIADO',
              'apariciones.activo' => 1
          ])
          ->groupBy('apariciones.id')
          ->get();
          //dd($denunciadosFis->get());
      $denunciadosMor = DB::table($db1.'.carpeta')
          ->join($db1.'.control_carpeta', 'control_carpeta.idCarpeta', '=', 'carpeta.id')
          ->join($db1.'.unidad', 'unidad.id', '=', 'control_carpeta.idUnidad')
          ->join($db1.'.users', 'users.id', '=', 'control_carpeta.idFiscal')
          ->join($db1.'.tipif_delito','carpeta.id','tipif_delito.idCarpeta')
          ->join($db2.'.cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
          ->join($db2.'.apariciones', 'apariciones.idCarpeta', '=', 'carpeta.id')
          ->join($db2.'.variables_persona_moral AS varper','varper.id','apariciones.idVarPersona')
          ->join($db2.'.persona_moral AS per', 'per.id', 'varper.idPersona')
          //->leftJoin($db2.'.extra_im01 as extra','extra.idVariablesPersona', 'varper.id')
          ->select('carpeta.numCarpeta', 'unidad.nombre as unidad', 'unidad.municipio', 'users.numFiscal', DB::raw('CONCAT(users.nombres, " ", ifnull(users.apellidos,"")) AS nombreFiscal'), DB::raw("DATE_FORMAT(carpeta.fechaInicio,'%d/%m/%Y') AS fechaInicio"), 'carpeta.estadoCarpeta', DB::raw("DATE_FORMAT(carpeta.created_at,'%d/%m/%Y') AS fechaCaptura"), DB::raw(' group_concat(CASE WHEN tipif_delito.idDelito = 123 THEN tipif_delito.delito ELSE cat_delito.nombre END SEPARATOR ", " ) AS delito'), 'per.nombre', DB::raw('CONCAT("") as edad'), DB::raw('CONCAT("") as sexo'), DB::raw('CONCAT("") as estadoOrigen'), DB::raw('CONCAT("") as telefono'), DB::raw('CONCAT("") as ocupacion'), DB::raw('CONCAT("") as escolaridad'), 'apariciones.subtipoInvolucrado')
          ->where([
              'apariciones.sistema' => 'uipj',
              'apariciones.esEmpresa' => 1,
              //'apariciones.tipoInvolucrado' => 'DENUNCIADO',
              'apariciones.activo' => 1
          ])
          ->groupBy('apariciones.id')
          ->get();
          //dd($denunciadosMor->get());
      $involucrados = $denunciadosFis->concat($denunciadosMor);
      // dd($involucrados);

      // dd($carpetas);

      return view('welcome')->with('carpetas',$involucrados);

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
