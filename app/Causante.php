<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causante extends Model
{
  protected $table = 'causantes';
  protected $fillable  = ['nombre','estado','tipo'];
  protected $PK = 'id';
}
