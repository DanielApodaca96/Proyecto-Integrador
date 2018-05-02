<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Metas;

class MetasController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function ajax(Request $req){



  }
    public function index(){
      $metas=\DB::table('metas')
        ->orderBy('id_metas')
        ->get();

      $datos=\DB::table('datos')
        ->get();

      $anio=\DB::select("
        SELECT * FROM datos order by id_persona desc LIMIT 1
      ");

      $meta=\DB::select("
        Select metas from metas order by id_metas desc limit 1
      ");

      $m1 = "";
      $m1 = $m1 . '"' . $meta{0}->metas . '"';

      $registrados1=\DB::select("
        SELECT COUNT(*) as contados from datos WHERE month(created_at)>0 and month(created_at)<=4 and anio = ".$anio{0}->anio.";
      ");
      // dd($registrados1);
      $registrados2=\DB::select("
        SELECT COUNT(*) as contados from datos WHERE month(created_at)>4 and month(created_at)<=8 and anio = ".$anio{0}->anio.";
      ");
      $registrados3=\DB::select("
        SELECT COUNT(*) as contados from datos WHERE month(created_at)>8 and month(created_at)<=12 and anio = ".$anio{0}->anio.";
      ");
      $r1 = "";
      $r1 = $r1 . '"' . $registrados1{0}->contados . '"';

      $r2 = "";
      $r2 = $r2 . '"' . $registrados2{0}->contados . '"';

      $r3 = "";
      $r3 = $r3 . '"' . $registrados3{0}->contados . '"';

      $title = "Oneami - Metas";
      return view('admin.metas')
        ->with('title', $title)
        ->with('metas',$m1)
        ->with('meta',json_encode($metas))
        ->with('anio',json_encode($anio))

        ->with('contados1',$r1)
        ->with('contados2',$r2)
        ->with('contados3',$r3);




    }





    public function store(Request $req){
      $validator = Validator:: make($req->all(),[
        'metas'=>'required|max:255'
      ]);
      if($validator->fails()){
        return redirect('/administracion/metas')
          ->withInput()
          ->withErrors($validator);
      }else{
        Metas::create([
          'metas'=>$req->metas
        ]);
      }
      return redirect()->to('/administracion/metas')
        ->with('mensaje','Meta Agregada');
    }
}
