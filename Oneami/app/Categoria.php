<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //id categoria
    protected $primaryKey='id_categoria';
    //nombre de la tabla
    protected $table='categorias';
    //campos que se pueden manipular
    protected $fillable=[
      'nombre'
    ];
}
