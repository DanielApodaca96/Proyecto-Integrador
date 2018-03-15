<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el validador
use Validator;
//Importamos el modelo User para poder insertar
use App\Grupo;

class GruposController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){
      $registros=\DB::table('grupos')
        ->orderBy('id_grupo')
        ->get();

      $title = "Oneami - Grupos";
      return view('admin.grupos')
        ->with('grupos',$registros)
        ->with('title', $title);
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nom_grupo'=>'required|max:255',
        'num_grupo'=>'required|max:255'
      ]);

      if($validator->fails()){
        return redirect('/administracion/grupos')
          ->withInput()
          ->withErrors($validator);
      }else{
        Grupo::create([
          'nom_grupo'=>$req->nom_grupo,
          'num_grupo'=>$req->num_grupo
        ]);
        return redirect()->to('/administracion/grupos')
          ->with('mensaje','Grupo Agregado');

      }
    }
}
