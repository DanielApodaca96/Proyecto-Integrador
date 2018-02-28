<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){
      $title = "Oneami - Inicio";
      return view('admin.index')
        ->with('title', $title);
    }
}
