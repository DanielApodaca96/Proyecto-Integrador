<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el validador
use Validator;
//Importamos el modelo User para poder insertar
use App\Pregunta;

class PreguntasController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){
      $title = "Oneami - Preguntas";
      return view('admin.preguntas')
        ->with('title', $title);
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'pregunta'=>'required|max:255',
        'tipo_respuesta'=>'required',
        'id_categoria'=>'required'
      ]);

      if($validator->fails()){
        return redirect('/administracion/preguntas')
          ->withInput()
          ->withErrors($validator);
      }else{
        Pregunta::create([
          'pregunta'=>$req->pregunta,
          'tipo_respuesta'=>$req->tipo_respuesta,
          'id_categoria'=>$req->id_categoria
        ]);
        return redirect()->to('/administracion/preguntas')
          ->with('mensaje','Pregunta Agregada');
      }

    }
}
