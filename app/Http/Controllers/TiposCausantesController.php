<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TiposCausante;
use App\TiposyCausante;
use App\Causante;

class TiposCausantesController extends Controller
{
  //muestra la vista donde se ven todos los handlings insertados
  public function getIndex(){
    $tipos = TiposCausante::all();
    $resultado="";
    return View('/coordinador/causantes/tiposCausantes/indexTipos')->with('tipos',$tipos)->with('resultado',$resultado);
  }
  //Obtiene el formulario de inserción de handling
  public function getCreate(){
    $caus = Causante::all()->sortBy('nombre');
    $tipos = TiposyCausante::all()->sortBy('nombreCausante');
    $resultado="";
    return View('/coordinador/causantes/tiposCausantes/insertarTipos', compact('resultado','caus','tipos'));
  }
  //Inserta el nuevo handling con un id autoincremental y
  //retorna la vista del listado de handlings creados
  public function postCreate(Request $request){
    $tipo = new TiposCausante;
    $tipo->nombre = $request->nombre;
    $tipo->estado = "e";
    $tipo->save();
    $insertedId = $tipo->id;
    $tipo2 = new TiposyCausante;
    $tipoCausante = TiposCausante::all()->last();
    $tipo2->tipoCausante_id = $tipoCausante->id;
    $tipo2->nombreTipo = $tipoCausante->nombre;
    $causante = Causante::findOrFail($request->causante);
    $tipo2->causante_id = $request->causante;
    $tipo2->nombreCausante = $causante->nombre;
    $tipo2->save();
    $insertedId = $tipo2->id;
    $resultado="Tipo Causante insertado y relacionado con éxito";
    $tipos = TiposyCausante::all()->sortBy('nombreCausante');
    $caus = Causante::all()->sortBy('nombre');
    return View('/coordinador/causantes/tiposCausantes/insertarTipos', compact('resultado','tipos','caus'));
  }
  //modifica el valor de estado de la base de datos para deshabilitar el usuario
  public function putDisable(Request $request, $id){
    $tipo = TiposCausante::findOrFail($id);
    $tipo->estado = "d";
    $tipo->save();
    $resultado="Tipo causante deshabilitado con éxito";
    $tipos = TiposCausante::all();
    return View('/coordinador/causantes/tiposCausantes/indexTipos', compact('resultado','tipos'));
  }
  //modifica el valor de estado de la base de datos para habilitar el usuario
  public function putEnable(Request $request, $id){
    $tipo = TiposCausante::findOrFail($id);
    $tipo->estado = "e";
    $tipo->save();
    $resultado="Tipo causante Habilitado con éxito";
    $tipos = TiposCausante::all();
    return View('/coordinador/causantes/tiposCausantes/indexTipos', compact('resultado','tipos'));
  }
  //obtiene el formulario de edición de handling con el id del handling
  //seleccionado en el listado de handlings.
  public function getEdit($id){
      $resultado="";
      $tipo = TiposCausante::findOrFail($id);
      return View('/coordinador/causantes/tiposCausantes/modificarTipos', compact('resultado','tipo','id'));
  }
  //modifica los valores del handling seleccionado en el listado.
  public function putEdit(Request $request, $id){
    $tipo = TiposCausante::findOrFail($id);
    $tipo->nombre = $request->nombre;
    $tipo->save();
    $tipos = TiposCausante::all();
    $resultado="Tipo causante Modificado con éxito";
    return View('/coordinador/causantes/tiposCausantes/indexTipos', compact('resultado','tipos'));
  }
}
