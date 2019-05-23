@include('headCoordinador')
<?php if ($resultado!=""):?>
  <div class="alert alert-success" role="alert">
    <center>{{$resultado}}</center>
  </div>
<?php endif; ?>
</br>
<div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Listado de Incidencias</h2>
            </div>
            @if ($incidencias->isEmpty())
                <div>No hay Incidencias</div>
            @else
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">Número Incidencia</th>
                            <th scope="row">Fecha-Hora Inicio</th>
                            <th scope="row">Fecha-Hora Fin</th>
                            <th scope="row">Ubicación</th>
                            <th scope="row">Compañía</th>
                            <th scope="row">Handling</th>
                            <th scope="row">Tipo Incidencia</th>
                            <th scope="row">Causante</th>
                            <th scope="row">Tipo de Causante</th>
                            <th scope="row">Acreditación</th>
                            <th scope="row">Observaciones</th>
                            <th scope="row">Solución</th>
                            <th scope="row"></th>
                            <th scope="row">
                              <a role="button" class="btn btn-success" href="/coordinador/insertar/incidencia">Añadir</a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($incidencias as $incidencia)
                            <tr>
                                <td>{!! $incidencia->id !!}</td>
                                <td>{!! $incidencia->fechaHoraInicio !!}</td>
                                <td>{!! $incidencia->fechaHoraFin !!}</td>
                                <td>{!! $incidencia->ubicacion !!}</td>
                                <td>{!! $incidencia->compania !!}</td>
                                <td>{!! $incidencia->handling !!}</td>
                                <td>{!! $incidencia->tipoIncidencia !!}</td>
                                <td>{!! $incidencia->causante !!}</td>
                                <td>{!! $incidencia->tipoCausante !!}</td>
                                <td>{!! $incidencia->nTarjeta !!}</td>
                                <td>{!! $incidencia->observaciones !!}</td>
                                <td>{!! $incidencia->solucion !!}</td>

                                <td></td>
                            <td>
                              <div>
                                <form method="post" action="/coordinador/eliminar/incidencia/{!!$incidencia->id!!}" class="pull-left">
                                  {!! csrf_field() !!}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                              </form>
                            </div>
                          </td>
                          </tr>

                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@include('footer')
