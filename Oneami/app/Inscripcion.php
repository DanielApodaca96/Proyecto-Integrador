<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    //id inscripcion
    protected $primaryKey='id_inscripcion';
    //nombre de la tabla
    protected $table='inscripciones';
    //campos que se pueden manipular
    protected $fillable=[
      'id_grupo','id_persona','fecha'
    ];
}
