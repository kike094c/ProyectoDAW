<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
  protected $table = 'incidencias';
  protected $fillable  = ['causante_id','handling_id','usuario_id','fechaHoraInicio','fechaHoraFin','ubicacion',
'compania','handling','tipoIncidencia','causante','tipoCausante','nTarjeta','observaciones','solucion'];
  protected $PK = 'id';
}
