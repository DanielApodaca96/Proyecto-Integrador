<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Resultado;

class ResultadosController extends Controller
{
  public function index(){
    $resultados=\DB::table('resultados')
      ->orderBy('id_resultado')
      ->get();

    $title = "Oneami - Preguntas";
    return view('admin.resultados')
      ->with('title',$title)
      ->with('resultados',$resultados);

  }

  public function ajax2(Request $req){
        $resultados=\DB::table('resultados')
        ->where('id_persona','=',$req->nombre)
        ->where('tipo','=',$req->tipo)
        ->get();
        return json_encode($resultados);
  }

  public function store(Request $req){

        $validator = Validator:: make($req->all(),[
          'id_persona'=>'required',
          'id_pregunta'=>'required',
          'porcentaje'=>'required|max:255',
          'tipo'=>'required|max:255',
          'id_inscripcion'=>'required'
        ]);
        if($validator->fails()){
          return 'Error';
        }else{

          Resultado::create([
            'id_persona'=>$req->id_persona,
            'id_pregunta'=>$req->id_pregunta,
            'porcentaje'=>$req->porcentaje,
            'tipo'=>$req->tipo,
            'id_inscripcion'=>$req->id_inscripcion
          ]);
          return '1';
        }
  }
}
