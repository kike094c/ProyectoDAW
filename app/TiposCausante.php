<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposCausante extends Model
{
  protected $table = 'tiposCausantes';
  protected $fillable  = ['nombre','estado'];
  protected $PK = 'id';
}
