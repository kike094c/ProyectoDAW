<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidencia;
use App\TiposyCausante;
use App\TiposCausante;
use App\Causante;
use App\Handling;
use App\Compania;
use Illuminate\Support\Facades\DB;

class IncidenciasController extends Controller
{
  //muestra la vista donde se ven todos las incidencias insertadas
  public function getIndex(){
    $incidencias = Incidencia::all();
    $resultado="";
    return View('/coordinador/incidencias/indexIncidencias')->with('incidencias',$incidencias)->with('resultado',$resultado);
  }
  public function getIndexTecnico(Request $request){
    $incidencias2 = Incidencia::where('usuario_id','=',$request->user()->id)->get();
    $resultado="";
    return View('/tecnicos/incidencias/indexIncidencias')->with('incidencias2',$incidencias2)->with('resultado',$resultado);
  }
  //Obtiene el formulario de inserción de incidencias
  public function getCreate(){
    $companias = Compania::where('estado','=','e')->get();
    $resultado="";
    return View('/coordinador/incidencias/insertIncidencias', compact('resultado','companias'));
  }
  public function getCreateTecnico(){
    $companias = Compania::where('estado','=','e')->get();
    $resultado="";
    return View('/tecnicos/incidencias/insertIncidencias', compact('resultado','companias'));
  }

  public function getHandling(Request $request, $id){
        if($request->ajax()){
          $companias = Compania::where('id','=',$id)->pluck('handling_id');
          $handlings = Handling::where('id','=',$companias)->pluck('nombre');
          return response()->json($handlings);
        }
  }

  public function getCausante(Request $request, $id){
        if($request->ajax()){
          $causantes = Causante::where('tipo','=',$id)->get();
          return response()->json($causantes);
        }
  }

  public function getTipoCausante(Request $request, $id){
        if($request->ajax()){
          $tiposCausantes = TiposyCausante::where('causante_id','=',$id)->get();
          return response()->json($tiposCausantes);
        }
  }

  //Inserta el nuevo handling con un id autoincremental y
  //retorna la vista del listado de handlings creados
  public function postCreate(Request $request){
    $companias = Compania::where('estado','=','e')->get();
    $handling = Handling::where('nombre','=',$request->handling)->value('id');
    $causante = Causante::where('id','=',$request->causante)->value('nombre');
    $tipo = TiposCausante::where('id','=',$request->tipoCausante)->value('nombre');
    $compania = Compania::where('id','=',$request->compania)->value('nombre');
    $incidencia = new Incidencia;
    $incidencia->usuario_id = $request->user()->id;
    $incidencia->handling_id = $handling;
    $incidencia->causante_id = $request->causante;
    $incidencia->fechaHoraInicio = $request->fecha1;
    $incidencia->fechaHoraFin = $request->fecha2;
    $incidencia->ubicacion = $request->ubicacion;
    $incidencia->compania = $compania;
    $incidencia->handling = $request->handling;
    $incidencia->causante = $causante;
    $incidencia->tipoIncidencia = $request->tipoIncidencia;
    $incidencia->tipoCausante = $tipo;
    $incidencia->nTarjeta = $request->tarjeta;
    $incidencia->observaciones = $request->observaciones;
    $incidencia->solucion = $request->solucion;
    $incidencia->save();
    $insertedId = $incidencia->id;
    $resultado="Incidencia insertada con éxito";
    $incidencias = Incidencia::all();
    return View('/coordinador/incidencias/indexincidencias', compact('resultado','incidencias','companias'));
  }
  public function postCreateTecnico(Request $request){
    $handling = Handling::where('nombre','=',$request->handling)->value('id');
    $causante = Causante::where('id','=',$request->causante)->value('nombre');
    $tipo = TiposCausante::where('id','=',$request->tipoCausante)->value('nombre');
    $compania = Compania::where('id','=',$request->compania)->value('nombre');
    $incidencia = new Incidencia;
    $incidencia->usuario_id = $request->user()->id;
    $incidencia->handling_id = $handling;
    $incidencia->causante_id = $request->causante;
    $incidencia->fechaHoraInicio = $request->fecha1;
    $incidencia->fechaHoraFin = $request->fecha2;
    $incidencia->ubicacion = $request->ubicacion;
    $incidencia->compania = $compania;
    $incidencia->handling = $request->handling;
    $incidencia->causante = $causante;
    $incidencia->tipoIncidencia = $request->tipoIncidencia;
    $incidencia->tipoCausante = $tipo;
    $incidencia->nTarjeta = $request->tarjeta;
    $incidencia->observaciones = $request->observaciones;
    $incidencia->solucion = $request->solucion;
    $incidencia->save();
    $insertedId = $incidencia->id;
    $resultado="Incidencia insertada con éxito";
    $incidencias2 = Incidencia::where('usuario_id','=',$request->user()->id)->get();
    return View('/tecnicos/incidencias/indexincidencias', compact('resultado','incidencias2'));
  }

  public function getEdit($id){
      $resultado="";
      $idcausante = Incidencia::where('id','=',$id)->value('causante_id');
      $ncompania = Incidencia::where('id','=',$id)->value('compania');
      $idcompania = Compania::where('nombre','=',$ncompania)->value('id');
      $ntipo = Incidencia::where('id','=',$id)->value('tipoCausante');
      $idtipo = TiposCausante::where('nombre','=',$ntipo)->value('id');
      $companias = Compania::where('estado','=','e')->get();
      $incidencia = Incidencia::findOrFail($id);
      return View('/coordinador/incidencias/modificarIncidencia', compact('resultado',
      'incidencia','id','companias','idcausante','idcompania','ncompania','ntipo', 'idtipo'));
  }

  public function putEdit(Request $request, $id){
    $companias = Compania::where('estado','=','e')->get();
    $handling = Handling::where('nombre','=',$request->handling)->value('id');
    $causante = Causante::where('id','=',$request->causante)->value('nombre');
    $tipo = TiposCausante::where('id','=',$request->tipoCausante)->value('nombre');
    $compania = Compania::where('id','=',$request->compania)->value('nombre');
    $incidencia = Incidencia::findOrFail($id);
    $incidencia->usuario_id = $request->user()->id;
    $incidencia->handling_id = $handling;
    $incidencia->causante_id = $request->causante;
    $incidencia->fechaHoraInicio = $request->fecha1;
    $incidencia->fechaHoraFin = $request->fecha2;
    $incidencia->ubicacion = $request->ubicacion;
    $incidencia->compania = $request->compania;
    $incidencia->handling = $request->handling;
    $incidencia->causante = $causante;
    $incidencia->tipoIncidencia = $request->tipoIncidencia;
    $incidencia->tipoCausante = $tipo;
    $incidencia->nTarjeta = $request->tarjeta;
    $incidencia->observaciones = $request->observaciones;
    $incidencia->solucion = $request->solucion;
    $incidencia->save();
    $incidencias = Incidencia::all();
    $resultado="Incidencia Modificada con éxito";
    return View('/coordinador/incidencias/indexincidencias', compact('resultado','incidencias','companias'));
  }

  public function destroy($id){
    $incidencia = Incidencia::where('id','=',$id)->firstOrFail();
    $incidencia->delete();
    $resultado = "Incidencia con ID ".$id.", Eliminada con éxito";
    $incidencias = Incidencia::all();
    return View('/coordinador/incidencias/indexincidencias', compact('resultado','incidencias'));
  }

}
