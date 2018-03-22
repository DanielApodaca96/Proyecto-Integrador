<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post_evaluacionController extends Controller
{
    //
    public function index(){

      $registros=\DB::table('preguntas')
      ->orderBy('id_pregunta')
      ->get();

      $title = "Oneami - Post-Evaluacion";
      return view('admin.post_evaluacion')
        ->with('title', $title)
        ->with('post', $registros);
    }
}
