<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
    //
    public function talleres(){
      return view('admin.talleres');
    }
}
