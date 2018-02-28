<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    //
    public function preguntas(){
      $title = "Oneami - Preguntas";
      return view('admin.preguntas')
        ->with('title', $title);
    }
}
