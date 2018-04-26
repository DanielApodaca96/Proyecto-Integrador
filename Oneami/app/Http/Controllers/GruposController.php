<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos el validador
use Validator;
//Importamos el modelo User para poder insertar
use App\Grupo;
use App\Inscripcion;
use App\Taller;

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

      $taller=\DB::table('talleres')
        ->orderBy('id_taller')
        ->get();

      $preguntas=\DB::table('preguntas')
        ->orderBy('id_pregunta')
        ->get();

      $grupos=\DB::table('datos')
        ->select('datos.*','grupos.*','inscripciones.*','talleres.*')
        ->join('inscripciones','datos.id_persona','=','inscripciones.id_persona')
        ->join('grupos','inscripciones.id_grupo','=','grupos.id_grupo')
        ->join('talleres','grupos.id_taller','=','talleres.id_taller')
        ->get();



      $title = "Oneami - Grupos";

      return view('admin.grupos')
        ->with('title', $title)
        ->with('grupos',$registros2)
        ->with('alumnos',$registros)
        ->with('grupos2',$grupos)
        ->with('pre',$preguntas)
        ->with('taller',$taller);

    }

    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nom_grupo'=>'required|max:255',
        'num_grupo'=>'required|max:255',
        'id_taller'=>'required'
      ]);

      if($validator->fails()){
        return redirect('/administracion/grupos')
          ->withInput()
          ->withErrors($validator);
      }else{
        Grupo::create([
          'nom_grupo'=>$req->nom_grupo,
          'num_grupo'=>$req->num_grupo,
          'id_taller'=>$req->id_taller
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

    //Aqui se hace la busqueda por nombre
    public function buscar(Request $req){
      $registros=\DB::table('datos')
      ->select("nombre","apellidoP","apellidoM","edad","sexo","telefono","estado_civil","escolaridad","id_persona")
      ->orwhere('nombre','like','%' . $req->nombre . '%')
      ->orwhere('apellidoP','like','%' . $req->nombre . '%')
      ->orwhere('apellidoM','like','%' . $req->nombre . '%')
      ->orwhere('edad','like','%' . $req->nombre . '%')
      ->orwhere('sexo','like','%' . $req->nombre . '%')
      ->orwhere('telefono','like','%' . $req->nombre . '%')
      ->orwhere('estado_civil','like','%' . $req->nombre . '%')
      ->orwhere('escolaridad','like','%' . $req->nombre . '%')
      ->orwhere('id_persona','like','%' . $req->nombre . '%')
      ->get();
      return json_encode($registros);
    }


}
