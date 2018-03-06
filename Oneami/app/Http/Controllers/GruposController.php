<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GruposController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function grupos(){
      $title = "Oneami - Grupos";
      return view('admin.grupos')
        ->with('title', $title);
    }
}
