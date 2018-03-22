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
      //categorias en el combobox
      $registros=\DB::table('categorias')
        ->orderBy('id_categoria')
        ->get();

      $registros2=\DB::table('preguntas')
      ->orderBy('id_pregunta')
      ->get();

      $categorias2=\DB::table('preguntas')
        ->select('categorias.*','preguntas.*')
        ->join('categorias','preguntas.id_categoria','=','categorias.id_categoria')
        ->get();

      $title = "Oneami - Preguntas";
      return view('admin.preguntas')
        ->with('title', $title)
        ->with('categorias',$registros)
        ->with('categorias2', $categorias2)
        ->with('preguntas',$registros2);
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
    }//llave store
    public function destroy($id){
      //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
      $alumnos = Pregunta::find($id);
      $alumnos->delete();
      return redirect('/administracion/preguntas/');
    }

    public function edit(Request $req){
      //Select * from..........
      $pregunta=Pregunta::find($req->id);
      $pregunta->pregunta=$req->nameEditar;
      $pregunta->save();
      return redirect('/administracion/preguntas/');
      dd("Registro Actualizado");
    }//llave editar
}
