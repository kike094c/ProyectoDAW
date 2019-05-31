<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compania;
use App\Handling;

class CompaniasController extends Controller
{
  //muestra la vista donde se ven todos los handlings insertados
  public function getIndex(){
    $companias = Compania::all();
    $resultado="";
    return View('/coordinador/companias/indexCompania')->with('companias',$companias)->with('resultado',$resultado);
  }
  //Obtiene el formulario de inserción de handling
  public function getCreate(){
    $handlings = Handling::all();
    $resultado="";
    return View('/coordinador/companias/insertarCompania', compact('resultado','handlings'));
  }
  //Inserta el nuevo handling con un id autoincremental y
  //retorna la vista del listado de handlings creados
  public function postCreate(Request $request){
    $compania = new Compania;
    $compania->nombre = $request->nombre;
    $compania->iata = $request->iata;
    $compania->handling_id = $request->handling;
    $compania->estado = "e";
    $compania->save();
    $insertedId = $compania->id;
    $resultado="Compañía insertada con éxito";
    $companias = Compania::all();
    return View('/coordinador/companias/indexCompania', compact('resultado','companias'));
  }
  //modifica el valor de estado de la base de datos para deshabilitar el usuario
  public function putDisable(Request $request, $id){
    $compania = Compania::findOrFail($id);
    $compania->estado = "d";
    $compania->save();
    $resultado="Compañía deshabilitada con éxito";
    $companias = Compania::all();
    return View('/coordinador/companias/indexCompania', compact('resultado','companias'));
  }
  //modifica el valor de estado de la base de datos para habilitar el usuario
  public function putEnable(Request $request, $id){
    $compania = Compania::findOrFail($id);
    $compania->estado = "e";
    $compania->save();
    $resultado="Compañía Habilitada con éxito";
    $companias = Compania::all();
    return View('/coordinador/companias/indexCompania', compact('resultado','companias'));
  }
  //obtiene el formulario de edición de handling con el id del handling
  //seleccionado en el listado de handlings.
  public function getEdit($id){
      $resultado="";
      $compania = Compania::findOrFail($id);
      $handlings = Handling::all();
      return View('/coordinador/companias/modificarCompania', compact('resultado','compania','id','handlings'));
  }
  //modifica los valores del handling seleccionado en el listado.
  public function putEdit(Request $request, $id){
    $compania = Compania::findOrFail($id);
    $compania->nombre = $request->nombre;
    $compania->iata = $request->iata;
    $compania->handling_id = $request->handling;
    $compania->save();
    $companias = Compania::all();
    $resultado="Compania Modificada con éxito";
    return View('/coordinador/companias/indexCompania', compact('resultado','companias'));
  }
}
