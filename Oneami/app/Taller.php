<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    //id del taller
    protected $primaryKey='id_taller';
    //nombre de la tabla
    protected $table='talleres';
    //campos que se pueden manipular
    protected $fillable=[
      'nombre_taller','descripcion','instructor'
    ];
}
