<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Dato;

class AlumnosController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){
      $registros=\DB::table('datos')
        ->orderBy('id_persona','nombre')
        ->get();

      $title = "Oneami - Alumnos";
      return view('admin.alumnos')
        ->with('title', $title)
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
      $alumnos = Dato::find($id);
      $alumnos->delete();
      return redirect('/administracion/alumnos/');
    }

    public function edit(Request $req){
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
      return redirect('/administracion/alumnos/');
      dd("Registro Actualizado");
    }//llave editar
}
