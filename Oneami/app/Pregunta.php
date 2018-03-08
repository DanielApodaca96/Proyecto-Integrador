<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
   //id pregunta
    protected $primaryKey='id_pregunta';
    //nombre de la tabla
    protected $table='preguntas';
    //campos que se pueden manipular
    protected $fillable=[
      'pregunta','id_categoria','tipo_respuesta'
    ];
}
