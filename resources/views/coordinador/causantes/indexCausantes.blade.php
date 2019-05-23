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
                <h2>Listado de Causantes</h2>
            </div>
            @if ($causantes->isEmpty())
                <div>No hay Causantes</div>
            @else
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">ID</th>
                            <th scope="row">Nombre</th>
                            <th scope="row">Tipo</th>
                            <th scope="row"></th>
                            <th scope="row">
                              <a role="button" class="btn btn-success" href="/coordinador/insertar/causante">Añadir</a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($causantes as $causante)
                            <tr>
                                <td>{!! $causante->id !!}</td>
                                <td>{!! $causante->nombre !!}</td>
                                <td>{!! $causante->tipo !!}</td>
                                <td>
                                  <?php if ($causante->estado=="e"){?>
                                    <form method="post" action='/coordinador/deshabilitar/causante/{!! $causante->id !!}' enctype="multipart/form-data">
                                    {!! method_field('PUT') !!}
                                    {!! csrf_field() !!}
                                      <div>
                                          <button type="submit" class="btn btn-warning">Deshabilitar</button>
                                      </div>
                                    </form>

                                <?php }else{ ?>
                                  <form method="post" action='/coordinador/habilitar/causante/{!! $causante->id !!}' enctype="multipart/form-data">
                                  {!! method_field('PUT') !!}
                                  {!! csrf_field() !!}
                                    <div>
                                        <button type="submit" class="btn btn-success">Habilitar</button>
                                    </div>
                                  </form>
                                <?php } ?>
                            </td>
                            <td>
                                <div>
                                    <a href="{{ url('/coordinador/modificar/causante/'.$causante->id)}}" class="btn btn-info" role="button">Modificar</a>
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
