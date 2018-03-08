<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    //id resultado
    protected $primaryKey='id_resultado';
    //nombre de la tabla
    protected $table='resultados';
    //campos que se pueden manipular
    protected $fillable=[
      'id_persona','id_pregunta','tipo','porcentaje','id_inscripcion'
    ];
}
