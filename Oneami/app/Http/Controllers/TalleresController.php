<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
  
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function talleres(){
      $title = "Oneami - Talleres";
      return view('admin.talleres')
        ->with('title', $title);
    }
}
