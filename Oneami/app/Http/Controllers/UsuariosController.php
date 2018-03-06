<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
  //Checar si esta logeado
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function usuarios(){
      $title = "Oneami - Usuarios";
      return view('admin.usuarios')
        ->with('title', $title);
    }
}
