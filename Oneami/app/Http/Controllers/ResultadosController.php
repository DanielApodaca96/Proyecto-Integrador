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
        foreach ($req as $r) {
        Resultado::create([
          'id_persona'=>$r->id_persona,
          'id_pregunta'=>$r->id_pregunta,
          'porcentaje'=>$r->porcentaje,
          'id_inscripcion'=>$r->id_inscripcion
        ]);
        return redirect()->to('administracion/grupos')
          ->with('mensaje','Evaluacion enviada.');
        }
      }

  }
}
