<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetasController extends Controller
{
    //
    public function metas(){
      return view('admin.metas');
    }
}
