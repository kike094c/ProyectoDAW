<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposyCausante extends Model
{
  protected $table = 'tiposyCausantes';
  protected $fillable  = ['tipoCausante_id','causante_id','nombreTipo','nombreCausante'];
  protected $PK = 'id';
}
