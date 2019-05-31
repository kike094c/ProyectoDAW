@include('headCoordinador')
<?php if ($resultado!=""):?>
  <div class="alert alert-success" role="alert">
    <center>{{$resultado}}</center>
  </div>
<?php endif; ?>
</br>
<span class="glyphicon glyphicon-plus"></span>
<div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Listado Causantes Relacionados</h2>
            </div>
            @if ($tipos->isEmpty())
                <div>No hay Tipos Causantes</div>
            @else
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">Causante</th>
                            <th scope="row">Tipo Causante</th>
                            <th scope="row">
                              <a role="button" class="btn btn-success" href="/coordinador/relacionar/causante">Añadir</a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tipos as $tipo)
                            <tr>
                                <td>{!! $tipo->nombreCausante !!}</td>
                                <td>{!! $tipo->nombreTipo !!}</td>
                            <td>
                                <div>
                                    <a href="{{ url('/coordinador/modificar/tipo/'.$tipo->id)}}" class="btn btn-info" role="button">Modificar</a>
                                </div>
                              </form>
                            </td>
                          </tr>

                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@include('footer')
