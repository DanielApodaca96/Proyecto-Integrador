<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    //id de la persona
    protected $primaryKey='id_persona';
    //nombre de la tabla
    protected $table='datos';
    //campos que se pueden manipular
    protected $fillable=[
      'nombre','apellidoP','apellidoM','edad','sexo','telefono',
      'estado_civil','escolaridad'
    ];
}
