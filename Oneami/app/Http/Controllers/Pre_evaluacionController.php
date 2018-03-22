<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pre_evaluacionController extends Controller
{
   public function index(){

     $registros=\DB::table('preguntas')
     ->orderBy('id_pregunta')
     ->get();

     $title = "Oneami - Pre-Evaluacion";
     return view('admin.pre_evaluacion')
       ->with('title', $title)
       ->with('pre', $registros);
   }
}
