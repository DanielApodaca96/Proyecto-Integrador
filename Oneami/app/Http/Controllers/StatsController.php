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
        $sexo=\DB::select("
          select sexo,count(*) as cuantos from datos group by sexo;
        ");
        $estado_civil=\DB::select("
          select estado_civil,count(*) as cuantos from datos group by estado_civil;
        ");
        $escolaridad=\DB::select("
          select escolaridad,count(*) as cuantos from datos group by escolaridad;
        ");

        $sexos='';
        $valores1='';

        $estados_civiles = '';
        $valores2='';
        
        $escolaridades = '';
        $valores3='';

        for($i = 0; $i<count($sexo); $i++){
          $sexos = $sexos . '"'.$sexo{$i}->sexo.'",';
          $valores1 = $valores1 . $sexo{$i}->cuantos.',';
        }
        for($i = 0; $i<count($estado_civil); $i++){
          $estados_civiles = $estados_civiles . '"' . $estado_civil{$i}->estado_civil .'",';
          $valores2=$valores2 . $estado_civil{$i}->cuantos . ',';
        }
        for($i = 0; $i<count($escolaridad); $i++){
          $escolaridades = $escolaridades . '"' . $escolaridad{$i}->escolaridad .'",';
          $valores3=$valores3 . $escolaridad{$i}->cuantos . ',';
        }

        $title = "Oneami - Estadisticas";
        return view('admin.stats')
        ->with('nombreGrafica','Cantidad de sexos')
        ->with('sexo',$sexos)
        ->with('valores1',$valores1)
        ->with('estado_civil',$estados_civiles)
        ->with('valores2',$valores2)
        ->with('escolaridad',$escolaridades)
        ->with('valores3',$valores3);
    }

}
