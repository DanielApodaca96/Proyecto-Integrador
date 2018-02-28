<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    //
    public function alumnos(){
      $title = "Oneami - Alumnos";
      return view('admin.alumnos')
        ->with('title', $title);
    }
}
