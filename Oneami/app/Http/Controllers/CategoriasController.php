<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
//Importamos el modelo User para poder insertar
use App\Categoria;

class CategoriasController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){



    $title = "Oneami - Preguntas";

    return view('admin.categorias')
      ->with('title', $title);



  }

  public function store(Request $req){
    $validator = Validator::make($req->all(),[
      'nombre'=>'required|max:255'
    ]);

    if($validator->fails()){
      return redirect('administracion/preguntas')
        ->withInput()
        ->withErrors($validator);
    }else{
      Categoria::create([
        'nombre'=>$req->nombre
      ]);
      return redirect()->to('/administracion/preguntas')
        ->with('mensaje','Categoria Agregada');
    }
  }
}
