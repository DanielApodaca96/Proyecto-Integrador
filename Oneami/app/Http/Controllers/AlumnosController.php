<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Dato;
use App\Inscripcion;

class AlumnosController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    public function ajax(Request $req){
      $registros3=\DB::table('inscripciones')
        ->where('id_persona','=',$req->id_persona)
        ->get();
      $grupos=\DB::table('grupos')
          ->orderBy('id_grupo')
          ->get();
      $todo="";

      for ($i=0; $i < count($grupos); $i++) {
        $bandera=false;
        for ($y=0; $y < count($registros3); $y++) {
          if($registros3{$y}->id_grupo == $grupos{$i}->id_grupo){
            $bandera=true;
          }
        }
        if($bandera==false){
           $todo=$todo.'<option value="'.$grupos{$i}->id_grupo.'">'.$grupos{$i}->nom_grupo.'</option>';
        }
      }

    return $todo;
    }
    public function index(){
      $registros=\DB::table('datos')
        ->orderBy('id_persona','nombre')
        ->get();

      $registros2=\DB::table('grupos')
        ->orderBy('id_grupo')
        ->get();

      $registros3=\DB::table('inscripciones')
        ->orderBy('id_inscripcion')
        ->get();






      $title = "Oneami - Alumnos";
      return view('admin.alumnos')
        ->with('title', $title)
        ->with('grupos',$registros2)
        ->with('inscripcion',json_encode($registros3))
        ->with('alumnos',$registros);
    }
    public function store(Request $req){
      $validator = Validator::make($req->all(),[
        'nombre'=>'required|max:255',
        'apellidoP'=>'required|max:255',
        'apellidoM'=>'required|max:255',
        'edad'=>'required|max:255',
        'sexo'=>'required',
        'telefono'=>'required|max:255',
        'estado_civil'=>'required',
        'escolaridad'=>'required'
      ]);

      if($validator->fails()){
        return redirect('/administracion/alumnos')
          ->withInput()
          ->withErrors($validator);
      }else{
        Dato::create([
          'nombre'=>$req->nombre,
          'apellidoP'=>$req->apellidoP,
          'apellidoM'=>$req->apellidoM,
          'edad'=>$req->edad,
          'sexo'=>$req->sexo,
          'telefono'=>$req->telefono,
          'estado_civil'=>$req->estado_civil,
          'escolaridad'=>$req->escolaridad,
        ]);
        return redirect()->to('/administracion/alumnos')
          ->with('mensaje','Alumno Agregado');
      }
    }
    public function destroy($id){
      //Consulta directamente al modelo, usaremos este manera para borrar las imagenes
      $alumnos= Inscripcion::where('id_persona','=',$id);
      $alumnos->delete();
      $alumnos = Dato::find($id);
      $alumnos->delete();
      return redirect('/administracion/alumnos/');
    }

    public function edit(Request $req){
      //Select * from..........
      $alumnos=Dato::find($req->id);
      $alumnos->nombre=$req->nameNombre;
      $alumnos->apellidoP=$req->nameApellidoP;
      $alumnos->apellidoM=$req->nameApellidoM;
      $alumnos->edad=$req->nameEdad;
      $alumnos->sexo=$req->editarSexo;
      $alumnos->telefono=$req->nameTelefono;
      $alumnos->estado_civil=$req->editarEstado;
      $alumnos->escolaridad=$req->editarEscolaridad;
      $alumnos->save();
      return redirect('/administracion/alumnos/')
        ->with('mensaje','Alumno Actualizado');
    }//llave editar
}
