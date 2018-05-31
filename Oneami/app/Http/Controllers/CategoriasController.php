<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
//Importamos el modelo User para poder insertar
use App\Categoria;
use App\Pregunta;
use App\Resultado;



class CategoriasController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){


    $title = "Oneami - Preguntas";
    return view('admin.categorias')
      ->with('title', $title)
      ->with('categorias', $categorias)

      ->with('preguntas', $preguntas);
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

  public function destroy($id){
    //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
    $pregunta= Pregunta::where('id_categoria','=',$id);
    $pregunta->delete();
    $pregunta= Resultado::where('id_categoria','=',$id);
    $pregunta->delete();


    //esto no funciono
  /*  $q = 'DELETE resultados FROM resultados INNER JOIN preguntas ON resultados.id_pregunta = preguntas.id_pregunta WHERE preguntas.id_categoria =' .$id.';';
    $inscripcion = \DB::delete($q, array($id));*/

    $pregunta= Categoria::find($id);
    $pregunta->delete();
    return redirect('/administracion/preguntas/');
  }
}
