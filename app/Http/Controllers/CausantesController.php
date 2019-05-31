<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Causante;
use App\TiposCausante;
use App\TiposyCausante;

class CausantesController extends Controller
{
  //muestra la vista donde se ven todos los causantes insertados
  public function getIndex(){
    $causantes = Causante::all();
    $resultado="";
    return View('/coordinador/causantes/indexCausantes')->with('causantes',$causantes)->with('resultado',$resultado);
  }
  //Obtiene el formulario de inserción de causantes
  public function getCreate(){
    $resultado="";
    return View('/coordinador/causantes/insertarCausantes', compact('resultado'));
  }
  public function getIndexRelation(){
    $tipos = TiposyCausante::all();
    $resultado="";
    return View('/coordinador/causantes/tiposCausantes/indexRelacion', compact('resultado','tipos'));
  }
  public function getRelation(){
    $tiposc = TiposCausante::all();
    $caus = Causante::all();
    $resultado="";
    return View('/coordinador/causantes/tiposCausantes/relCausantes', compact('resultado','tiposc','caus'));
  }
  //Inserta el nuevo causante con un id autoincremental y
  //retorna la vista del listado de causantes creados
  public function postCreate(Request $request){
    $causante = new Causante;
    $causante->nombre = $request->nombre;
    $causante->tipo = $request->tipoInc;
    $causante->estado = "e";
    $causante->save();
    $insertedId = $causante->id;
    $resultado="Causante insertado con éxito";
    $causantes = Causante::all();
    return View('/coordinador/causantes/indexCausantes', compact('resultado','causantes'));
  }
  //modifica el valor de estado de la base de datos para deshabilitar el usuario
  public function putDisable(Request $request, $id){
    $causante = Causante::findOrFail($id);
    $causante->estado = "d";
    $causante->save();
    $resultado="Causante deshabilitado con éxito";
    $causantes = Causante::all();
    return View('/coordinador/causantes/indexCausantes', compact('resultado','causantes'));
  }
  //modifica el valor de estado de la base de datos para habilitar el usuario
  public function putEnable(Request $request, $id){
    $causante = Causante::findOrFail($id);
    $causante->estado = "e";
    $causante->save();
    $resultado="Causante Habilitado con éxito";
    $causantes = Causante::all();
    return View('/coordinador/causantes/indexCausantes', compact('resultado','causantes'));
  }
  //obtiene el formulario de edición de handling con el id del handling
  //seleccionado en el listado de handlings.
  public function getEdit($id){
      $resultado="";
      $causante = Causante::findOrFail($id);
      return View('/coordinador/causantes/modificarCausantes', compact('resultado','causante','id'));
  }
  //modifica los valores del handling seleccionado en el listado.
  public function putEdit(Request $request, $id){
    $causante = Causante::findOrFail($id);
    $causante->nombre = $request->nombre;
    $causante->tipo = $request->tipo;
    $causante->tipoCausante_id = $request->tipoCausante;
    $causante->save();
    $causantes = Causante::all();
    $resultado="Causante Modificado con éxito";
    return View('/coordinador/causantes/indexCausantes', compact('resultado','causantes'));
  }
}
