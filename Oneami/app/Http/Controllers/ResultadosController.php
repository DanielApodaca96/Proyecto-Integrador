<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
  public function store(Request $req){
    $validator = Validator:: make($req->all(),[
      'id_persona'=>'required',
      'id_pregunta'=>'required',
      'porcentaje'=>'required|max:255',
      'id_inscripcion'=>'required'
    ]);
    if($validator->fails()){
      return redirect('administracion/grupos')
        ->withInput()
        ->withErrors($validator);
    }else{
      Resultado::create([
        'id_persona'=>$req->id_persona,
        'id_pregunta'=>$req->id_pregunta,
        'porcentaje'=>$req->porcentaje,
        'id_inscripcion'=>$req->id_inscripcion
      ]);
      return redirect()->to('administracion/grupos')
        ->with('mensaje','Evaluacion enviada.')
    }
  }
}
