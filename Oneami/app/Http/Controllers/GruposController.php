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
      $registros=\DB::table('datos')
        ->orderBy('id_persona','nombre')
        ->get();

      $registros2=\DB::table('grupos')
        ->orderBy('id_grupo')
        ->get();

      $grupos=\DB::table('datos')
        ->select('datos.*','grupos.*','inscripciones.*')
        ->join('inscripciones','datos.id_persona','=','inscripciones.id_persona')
        ->join('grupos','inscripciones.id_grupo','=','grupos.id_grupo')
        ->get();


      $title = "Oneami - Grupos";
      return view('admin.grupos')
        ->with('title', $title)
        ->with('grupos',$registros2)
        ->with('alumnos',$registros)
        ->with('grupos2',$grupos);
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

    public function destroy($id){
      //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
      $alumnos= Inscripcion::where('id_grupo','=',$id);
      $alumnos->delete();
      $grupos = Grupo::find($id);
      $grupos->delete();
      return redirect('/administracion/grupos/');

      $borrarTodo = DB::table('grupos')
            ->leftJoin('inscripciones', 'grupos.id_grupo', '=', 'inscripciones.id_grupo')
            ->delete();


    }

    public function edit(Request $req){
      //Select * from..........
      $grupos=Grupo::find($req->id);
      $grupos->num_grupo=$req->numGrupo;
      $grupos->nom_grupo=$req->nameGrupo;
      $grupos->save();
      return redirect('/administracion/grupos/');
      dd("Registro Actualizado");
    }//llave editar

    public function editalu(Request $req){
      //Select * from..........
      $alumnos=Dato::find($req->id);
      $alumnos->nombre=$req->nameEditar;
      $alumnos->apellidoP=$req->nameApellidoP;
      $alumnos->apellidoM=$req->nameApellidoM;
      $alumnos->edad=$req->nameEdad;
      $alumnos->sexo=$req->editarSexo;
      $alumnos->telefono=$req->nameTelefono;
      $alumnos->estado_civil=$req->editarEstado;
      $alumnos->escolaridad=$req->editarEscolaridad;
      $alumnos->save();
      return redirect('/administracion/grupos/');
      dd("Registro Actualizado");
    }//llave editar


}
