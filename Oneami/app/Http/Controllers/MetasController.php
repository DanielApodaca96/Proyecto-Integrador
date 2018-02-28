<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetasController extends Controller
{
    //
    public function metas(){
      $title = "Oneami - Metas";
      return view('admin.metas')
        ->with('title', $title);
    }
}
