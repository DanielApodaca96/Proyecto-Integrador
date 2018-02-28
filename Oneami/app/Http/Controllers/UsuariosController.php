<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //
    public function usuarios(){
      $title = "Oneami - Usuarios";
      return view('admin.usuarios')
        ->with('title', $title);
    }
}
