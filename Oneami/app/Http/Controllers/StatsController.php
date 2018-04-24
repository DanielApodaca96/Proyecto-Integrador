<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $title = "Oneami - Estadisticas";
        return view('admin.stats')
        ->with('nombreGrafica','equiposFutbol');
    }

}
