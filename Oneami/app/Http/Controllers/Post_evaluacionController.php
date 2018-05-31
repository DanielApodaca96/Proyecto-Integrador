<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post_evaluacionController extends Controller
{
    //
    public function index($id){

      $registros=\DB::table('preguntas')
      ->orderBy('id_pregunta')
      ->get();

      $resultado1=\DB::select("
        select id_persona, avg(porcentaje) as porcentaje, categorias.nombre, resultados.tipo from resultados INNER JOIN preguntas ON resultados.id_pregunta = preguntas.id_pregunta
        inner join categorias on categorias.id_categoria = preguntas.id_categoria
        where resultados.tipo = 'pre' and resultados.id_persona = ".$id." GROUP by categorias.nombre
      ");

      $resultado2=\DB::select("
        select id_persona, avg(porcentaje) as porcentaje, categorias.nombre, resultados.tipo from resultados INNER JOIN preguntas ON resultados.id_pregunta = preguntas.id_pregunta
        inner join categorias on categorias.id_categoria = preguntas.id_categoria
        where resultados.tipo = 'post' and resultados.id_persona = ".$id." GROUP by categorias.nombre
      ");

      $resultados1="";
      $valores1="";
      $resultados2="";
      $valores2="";

      for($i = 0; $i<count($resultado1); $i++){
        $resultados1 = $resultados1 . '"' .$resultado1{$i}->nombre.'",';
        $valores1 = $valores1 . $resultado1{$i}->porcentaje.',';
      }
      for($i = 0; $i<count($resultado2); $i++){
        $resultados2 = $resultados2 . '"'.$resultado2{$i}->nombre.'",';
        $valores2 = $valores2 . $resultado2{$i}->porcentaje.',';
      }


      
      $title = "Oneami - Post-Evaluacion";
      return view('admin.post_evaluacion')
      ->with('nombreGrafica1','Pre-Evaluación')
      ->with('nombreGrafica2','Post-Evaluación')
        ->with('title', $title)
        ->with('post', $registros)
        ->with('resultados1',$resultados1)
        ->with('valores1',$valores1)
        ->with('resultados2',$resultados2)
        ->with('valores2',$valores2);



    }
    public function ajaxGrafica(Request $r){

      $resultado11=\DB::select("
        select id_persona, avg(porcentaje) as porcentaje, categorias.nombre, resultados.tipo from resultados INNER JOIN preguntas ON resultados.id_pregunta = preguntas.id_pregunta
        inner join categorias on categorias.id_categoria = preguntas.id_categoria
        where resultados.tipo = 'pre' and resultados.id_persona = '".$r->nombre ."' GROUP by categorias.nombre
      ");

      $resultado21=\DB::select("
        select id_persona, avg(porcentaje) as porcentaje, categorias.nombre, resultados.tipo from resultados INNER JOIN preguntas ON resultados.id_pregunta = preguntas.id_pregunta
        inner join categorias on categorias.id_categoria = preguntas.id_categoria
        where resultados.tipo = 'post' and resultados.id_persona = '".$r->nombre."' GROUP by categorias.nombre
      ");

      $resultados1="";
      $valores1="";
      $resultados2="";
      $valores2="";

      for($i = 0; $i<count($resultado11); $i++){
        $resultados1 = $resultados1 . '"' .$resultado11{$i}->nombre.'",';
        $valores1 = $valores1 . $resultado11{$i}->porcentaje.',';
      }

      for($i = 0; $i<count($resultado21); $i++){
        $resultados2 = $resultados2 . '"'.$resultado21{$i}->nombre.'",';
        $valores2 = $valores2 . $resultado21{$i}->porcentaje.',';
      }

      $todo = $resultados1 ."#".$valores1."#".$resultados2 . "#" . $valores2;
      return $r->nombre;
    }
}
