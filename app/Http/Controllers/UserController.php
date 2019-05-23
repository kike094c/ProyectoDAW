<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
  public function getIndex(){
    $usuarios = User::all();
    $resultado="";
    return View('/coordinador/administracion/indexUser')->with('usuarios',$usuarios)->with('resultado',$resultado);
  }

  protected function getCreate()
  {
    $resultado="";
    return View('/coordinador/administracion/insertUser', compact('resultado'));
  }

  protected function create(Request $request)
  {
    $user = User::create([
    'name' => $request['name'],
    'email' => $request['email'],
    'password' => bcrypt($request['password']),
    ]);
    $user
      ->roles()
      ->attach(Role::where('name', $request['tipo'])->first());

    $resultado = "Usuario insertado con éxito";
    $usuarios = User::all();
    return View('/coordinador/administracion/indexUser', compact('resultado','usuarios'));
  }

  public function putDisable(Request $request, $id){
    $usuario = User::findOrFail($id);
    $usuario->estado = "d";
    $usuario->save();
    $resultado="Usuario deshabilitado con éxito";
    $usuarios = User::all();
    return View('/coordinador/administracion/indexUser', compact('resultado','usuarios'));
  }
  //modifica el valor de estado de la base de datos para habilitar el usuario
  public function putEnable(Request $request, $id){
    $usuario = User::findOrFail($id);
    $usuario->estado = "e";
    $usuario->save();
    $resultado="Usuario Habilitado con éxito";
    $usuarios = User::all();
    return View('/coordinador/administracion/indexUser', compact('resultado','usuarios'));
  }

  public function getEdit($id){
      $resultado="";
      $usuario = User::findOrFail($id);
      return View('/coordinador/administracion/modificarUser', compact('resultado','usuario','id'));
  }
  //modifica los valores del handling seleccionado en el listado.
  public function putEdit(Request $request, $id){
    $usuario = User::findOrFail($id);
    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->password = bcrypt($request->password);
    $usuario->save();
    $usuarios = User::all();
    $resultado="Usuario Modificado con éxito";
    return View('/coordinador/administracion/indexUser', compact('resultado','usuarios'));
  }
}
