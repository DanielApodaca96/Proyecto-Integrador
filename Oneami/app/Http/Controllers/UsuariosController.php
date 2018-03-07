<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el validador
use Validator;
//Importamos el modelo User para poder insertar
use App\User;

class UsuariosController extends Controller
{
  //Checar si esta logeado
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){
      $title = "Oneami - Usuarios";
      return view('admin.usuarios')
        ->with('title', $title);
    }
    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nombre'=>'required|max:255',
        'correo'=>'required|email',
        'contrasena1'=>'required|max:255',
        'contrasena2'=>'required|max:255',
        /*'imagen'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'*/
        'privilegios'=>'required'
      ]);

      if($validator->fails()){
        //si el validador fallo quiere decir que no esta correcto
        return redirect('/administracion/usuarios')
          ->withInput()
          ->withErrors($validator);
      }else{
        //el punto es para concatenar
        /*$nombreImagen=time() . '.' . $req->imagen->getClientOriginalExtension();
        $req->imagen->move(public_path('/img/usuarios'),$nombreImagen);*/


        //Insertamos, en esta parte User es la clase del modelo User
        //-> es como el . en java $req.nombre == $req->nombre y el => se usa cuando estamos en un arreglo
        User::create([
          'name'=>$req->nombre,
          'email'=>$req->correo,
          'password'=>bcrypt($req->contrasena1),
          //'imagen'=>nombreImagen,
          'privilegios'=>$req->privilegios
        ]);
        return redirect()->to('/administracion/usuarios')
          ->with('mensaje','Usuario Agregado');

      }

    }
}
