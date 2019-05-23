<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Handling;
use App\Compania;

class Handling extends Model
{

   protected $table = 'handlings';
   protected $fillable  = ['nombre','iata','estado'];
   protected $PK = 'id';

}
