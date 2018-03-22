<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
//Importamos el modelo User para poder insertar
use App\Inscripcion;

class InscripcionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      return('admin.alumnos')
        ->with('inscripcion',$ins);

    }
    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nameEditar'=>'required|max:255',
        'id_grupo'=>'required',
        'tiempo'=>'required'
      ]);
      if($validator->fails()){
        return redirect('/administracion/alumnos')
          ->withInput()
          ->withErrors($validator);
      }else{
        Inscripcion::create([
          'id_persona'=>$req->nameEditar,
          'id_grupo'=>$req->id_grupo,
          'fecha'=>$req->tiempo
        ]);
        return redirect()->to('/administracion/alumnos')
          ->with('mensaje','Inscripcion realizada');

      }
    }
    public function destroy($id){
      //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
      $ins= Inscripcion::find($id);
      $ins->delete();
      return redirect('/administracion/grupos/');
    }
}
