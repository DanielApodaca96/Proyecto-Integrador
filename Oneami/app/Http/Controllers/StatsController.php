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
        $categoria=\DB::select("
          select nombre,count(*) as cuantos from categorias group by nombre;
        ");

       /*$promedio=\DB::select("
          select id_persona, avg(porcentaje), categorias.nombre, resultados.tipo from resultados INNER JOIN preguntas ON resultados.id_pregunta = preguntas.id_pregunta
          inner join categorias on categorias.id_categoria = preguntas.id_categoria
          where resultados.tipo = 'pre' GROUP by categorias.nombre
        ");*/


        $promedio=\DB::table('resultados')
          ->selectRaw('resultados.id_persona, avg(porcentaje), categorias.nombre')
          ->join('preguntas','resultados.id_pregunta','=','preguntas.id_pregunta')
          ->join('categorias','categorias.id_categoria','=','preguntas.id_categoria')
          ->where('resultados.tipo','=','pre')
          ->groupBy('categorias.nombre')
          ->get();

          dd($promedio);

        $countTotalPersonas=\DB::select("
          select count(*) as cuantos from datos;
        ");
        $countTotalGrupos=\DB::select("
          select count(*) as cuantos from grupos;
        ");
        $countTotalTalleres=\DB::select("
          select count(*) as cuantos from talleres;
        ");

        $cTP = "";
        $cTG = "";
        $cTT = "";

        $cTP = $cTP . '' . $countTotalPersonas{0}->cuantos . '';
        $cTG = $cTG . '' . $countTotalGrupos{0}->cuantos . '';
        $cTT = $cTT . '' . $countTotalTalleres{0}->cuantos . '';

        $sexos='';
        $valores1='';

        $estados_civiles = '';
        $valores2='';

        $escolaridades = '';
        $valores3='';

        $categorias = '';
        $categorias1='';

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
        for($i = 0; $i<count($categoria); $i++){
          $categorias = $categorias . '"' . $categoria{$i}->nombre .'",';
          $categorias1 = $categorias1 . $categoria{$i}->cuantos . ',';
        }

        $title = "Oneami - Estadisticas";
        return view('admin.stats')
        ->with('nombreGrafica','Cantidad de sexos')
        ->with('sexo',$sexos)
        ->with('valores1',$valores1)
        ->with('estado_civil',$estados_civiles)
        ->with('valores2',$valores2)
        ->with('escolaridad',$escolaridades)
        ->with('valores3',$valores3)
        ->with('categoria',$categorias)
        ->with('categoria1',$categorias)
        ->with('TotalPersonas',$cTP)
        ->with('TotalGrupos',$cTG)
        ->with('TotalTalleres',$cTT);
    }

}
