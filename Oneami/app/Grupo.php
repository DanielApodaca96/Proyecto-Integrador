<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //id del grupo
    protected $primaryKey='id_grupo';
    //nombre de la tabla
    protected $table='grupos';
    //campos que se pueden manipular
    protected $fillable=[
      'num_grupo','nom_grupo','id_taller'
    ];
}
