<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    //
    protected $primaryKey='id_metas';
    //nombre de la tabla
    protected $table='metas';
    //campos que se pueden manipular
    protected $fillable=[
      'metas'
    ];
}
