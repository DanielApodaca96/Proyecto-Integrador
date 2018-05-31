<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el validador
use Validator;
//Importamos el modelo User para poder insertar
use App\Taller;
use App\Grupo;

class TalleresController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){
      $registro=\DB::table('talleres')
        ->orderBy('id_taller')
        ->get();
      $title = "Oneami - Talleres";
      return view('admin.talleres')
        ->with('title', $title)
        ->with('talleres', $registro);
    }

    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nombre_taller'=>'required|max:255',
        'instructor'=>'required|max:255',
        'descripcion'=>'required|max:800'
      ]);

      if($validator->fails()){
        return redirect('/administracion/talleres')
          ->withInput()
          ->withErrors($validator);
      }else{
        Taller::create([
          'nombre_taller'=>$req->nombre_taller,
          'instructor'=>$req->instructor,
          'descripcion'=>$req->descripcion
        ]);
        return redirect()->to('/administracion/talleres')
          ->with('mensaje','Taller Agregado');

      }
    }

    public function destroy($id){
      //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
      $id_taller="";
      $id_grupos="";
      $taller=\DB::table('talleres')
        ->where('id_taller','=',$id)
        ->get();
        foreach($taller as $t){
          $id_taller=$t->id_taller;
        }
      $grupos=\DB::table('grupos')
        ->where('id_taller','=',$id)
        ->get();
        foreach($grupos as $g){
          $id_grupos=$g->id_taller;
        }
      if($id_taller==$id_grupos){
          return redirect('/administracion/talleres/')
        ->with('mensaje2','No se puede eliminar este taller porque pertenece a un grupo existente.');

      }else{
        $talleres = Taller::find($id);
        $talleres->delete();
        return redirect('/administracion/talleres/')
        ->with('mensaje','Taller Eliminado.');
      }
    }

    public function edit(Request $req){
      //Select * from..........
      $talleres=Taller::find($req->id);
      $talleres->nombre_taller=$req->nameEditar;
      $talleres->descripcion=$req->nameDescripcion;
      $talleres->instructor=$req->nameInstructor;
      $talleres->save();
      return redirect('/administracion/talleres/');
      dd("Registro Actualizado");
    }//llave editar
}
