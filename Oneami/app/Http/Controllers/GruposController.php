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
      $registros2=\DB::table('grupos')
        ->orderBy('id_grupo')
        ->get();

      $title = "Oneami - Grupos";
      return view('admin.alumnos')
        ->with('grupos',$registros2)
        ->with('title', $title);
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nom_grupo'=>'required|max:255',
        'num_grupo'=>'required|max:255'
      ]);

      if($validator->fails()){
        return redirect('/administracion/alumnos')
          ->withInput()
          ->withErrors($validator);
      }else{
        Grupo::create([
          'nom_grupo'=>$req->nom_grupo,
          'num_grupo'=>$req->num_grupo
        ]);
        return redirect()->to('/administracion/alumnos')
          ->with('mensaje','Grupo Agregado');

      }
    }

    public function destroy($id){
      //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
      $grupos = Grupo::find($id);
      $grupos->delete();
      return redirect('/administracion/alumnos/');
    }

    public function edit(Request $req){
      //Select * from..........
      $grupos=Grupo::find($req->id);
      $grupos->num_grupo=$req->numGrupo;
      $grupos->nom_grupo=$req->nameGrupo;
      $grupos->save();
      return redirect('/administracion/alumnos/');
      dd("Registro Actualizado");
    }//llave editar
}
