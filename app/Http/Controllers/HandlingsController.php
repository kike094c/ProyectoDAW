<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handling;

class HandlingsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
      $request->user()->authorizeRoles(['user', 'admin']);
      return view('coordinador/handlings/insertarHandling');
  }

    //muestra la vista donde se ven todos los handlings insertados
    public function getIndex(){
      $handlings = Handling::all();
      $resultado="";
      return View('/coordinador/handlings/indexHandling')->with('handlings',$handlings)->with('resultado',$resultado);
    }
    //Obtiene el formulario de inserción de handling
    public function getCreate(){
      $resultado="";
      return View('/coordinador/handlings/insertarHandling', compact('resultado'));
    }
    //Inserta el nuevo handling con un id autoincremental y
    //retorna la vista del listado de handlings creados
    public function postCreate(Request $request){
      $handling = new Handling;
      $handling->nombre = $request->nombre;
      $handling->iata = $request->iata;
      $handling->estado = "e";
      $handling->save();
      $insertedId = $handling->id;
      $resultado="Handling insertado con éxito";
      $handlings = Handling::all();
      return View('/coordinador/handlings/indexHandling', compact('resultado','handlings'));
    }
    //modifica el valor de estado de la base de datos para deshabilitar el usuario
    public function putDisable(Request $request, $id){
      $handling = Handling::findOrFail($id);
      $handling->estado = "d";
      $handling->save();
      $resultado="Handling deshabilitado con éxito";
      $handlings = Handling::all();
      return View('/coordinador/handlings/indexHandling', compact('resultado','handlings'));
    }
    //modifica el valor de estado de la base de datos para habilitar el usuario
    public function putEnable(Request $request, $id){
      $handling = Handling::findOrFail($id);
      $handling->estado = "e";
      $handling->save();
      $resultado="Handling Habilitado con éxito";
      $handlings = Handling::all();
      return View('/coordinador/handlings/indexHandling', compact('resultado','handlings'));
    }
    //obtiene el formulario de edición de handling con el id del handling
    //seleccionado en el listado de handlings.
    public function getEdit($id){
        $resultado="";
        $handling = Handling::findOrFail($id);
        return View('/coordinador/handlings/modificarHandling', compact('resultado','handling','id'));
    }
    //modifica los valores del handling seleccionado en el listado.
    public function putEdit(Request $request, $id){
      $handling = Handling::findOrFail($id);
      $handling->nombre = $request->nombre;
      $handling->iata = $request->iata;
      $handling->save();
      $handlings = Handling::all();
      $resultado="Handling Modificado con éxito";
      return View('/coordinador/handlings/indexHandling', compact('resultado','handlings'));
    }
}
