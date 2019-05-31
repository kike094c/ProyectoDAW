<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidencia;

class ChartController extends Controller
{
    public function getIndex(Request $request){
        return view('coordinador/administracion/indexInforme');
    }


    public function index(Request $request){
      $inicio = "";
      $fin = "";
      $mes = $request->mes;
      $anio = $request->anio;

      if($mes=="enero"){
        $inicio = $anio."-01-01";
        $fin = $anio."-01-31";
      }
      if($mes=="febrero"){
        $inicio = $anio."-02-01";
        $fin = $anio."-02-29";
      }
      if($mes=="marzo"){
        $inicio = $anio."-03-01";
        $fin = $anio."-03-31";
      }
      if($mes=="abril"){
        $inicio = $anio."-04-01";
        $fin = $anio."-04-30";
      }
      if($mes=="mayo"){
        $inicio = $anio."-05-01";
        $fin = $anio."-05-31";
      }
      if($mes=="junio"){
        $inicio = $anio."-06-01";
        $fin = $anio."-06-30";
      }
      if($mes=="julio"){
        $inicio = $anio."-07-01";
        $fin = $anio."-07-31";
      }
      if($mes=="agosto"){
        $inicio = $anio."-08-01";
        $fin = $anio."-08-31";
      }
      if($mes=="septiembre"){
        $inicio = $anio."-09-01";
        $fin = $anio."-09-30";
      }
      if($mes=="octubre"){
        $inicio = $anio."-10-01";
        $fin = $anio."-10-31";
      }
      if($mes=="noviembre"){
        $inicio = $anio."-11-01";
        $fin = $anio."-11-30";
      }
      if($mes=="diciembre"){
        $inicio = $anio."-12-01";
        $fin = $anio."-12-31";
      }

      $incidenciasHdw = Incidencia::where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->get();
      $incidenciasCountHdw = $incidenciasHdw->count();

      $incidenciasSfw = Incidencia::where('tipoIncidencia','=','sfw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->get();
      $incidenciasCountSfw = $incidenciasSfw->count();

      $incidenciasUsr = Incidencia::where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->get();
      $incidenciasCountUsr = $incidenciasUsr->count();

      //contador de incidencias por causante y tipo.
      //HARDWARE
      $atbh = Incidencia::Where('causante','=','atb')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $bgrh = Incidencia::Where('causante','=','bgr')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $btph = Incidencia::Where('causante','=','btp')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $cpuh = Incidencia::Where('causante','=','cpu')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $monh = Incidencia::Where('causante','=','mon')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $tech = Incidencia::Where('causante','=','tec')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $lsrh = Incidencia::Where('causante','=','lsr')->where('tipoIncidencia','=','hdw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      //SOFTWARE
      $sos = Incidencia::Where('causante','=','so')->where('tipoIncidencia','=','sfw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $vpss = Incidencia::Where('causante','=','vps')->where('tipoIncidencia','=','sfw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $emus = Incidencia::Where('causante','=','emu')->where('tipoIncidencia','=','sfw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $ucas = Incidencia::Where('causante','=','uca')->where('tipoIncidencia','=','sfw')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      //USUARIO
      $atbu = Incidencia::Where('causante','=','atb')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $bgru = Incidencia::Where('causante','=','bgr')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $btpu = Incidencia::Where('causante','=','btp')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $cpuu = Incidencia::Where('causante','=','cpu')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $monu = Incidencia::Where('causante','=','mon')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $tecu = Incidencia::Where('causante','=','tec')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $lsru = Incidencia::Where('causante','=','lsr')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();
      $emuu = Incidencia::Where('causante','=','emu')->where('tipoIncidencia','=','usr')->where('fechaHoraInicio','>=',$inicio)->where('fechaHoraInicio','<=',$fin)->count();

      $sumahdw = $atbh+$bgrh+$btph+$cpuh+$monh+$tech+$lsrh;
      $sumasfw = $sos+$vpss+$emus+$ucas;
      $sumausr = $atbu+$bgru+$btpu+$cpuu+$monu+$tecu+$lsru+$emuu;
      $sumatodo = $sumahdw+$sumasfw+$sumausr;
      return view('coordinador/administracion/informe',['incidenciasCountHdw'=>$incidenciasCountHdw, 'incidenciasCountSfw'=>$incidenciasCountSfw,
    'incidenciasCountUsr'=>$incidenciasCountUsr, 'atbh'=>$atbh, 'atbu'=>$atbu, 'bgrh'=>$bgrh, 'bgru'=>$bgru, 'btph'=>$btph, 'btpu'=>$btpu
    , 'cpuh'=>$cpuh, 'cpuu'=>$cpuu, 'emus'=>$emus, 'emuu'=>$emuu, 'monh'=>$monh, 'monu'=>$monu, 'tech'=>$tech, 'tecu'=>$tecu, 'ucas'=>$ucas,
     'lsrh'=>$lsrh, 'lsru'=>$lsru,'sos'=>$sos, 'vpss'=>$vpss, 'sumahdw'=>$sumahdw, 'sumasfw'=>$sumasfw, 'sumausr'=>$sumausr, 'sumatodo'=>$sumatodo]);



    }

    public function index2(){

    }
}
