@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Insertar Nuevo Tipo Causante</h2>
</div>
<center>
  <form method="post" action="/coordinador/insertar/tipo" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="form-group col-md-4">
        <label>Nombre Tipo Causante</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
      </div>
      <div class="form-group col-md-6">
              <label for="causante">Selecciona Causante a asociar</label>
              <select class="form-control" name="causante" id="causante">
                  @foreach($caus as $cau)
                  <option value="{{$cau->id}}">{{$cau->nombre}} - {{$cau->tipo}}</option>
                  @endforeach
              </select>
      </div>
    <center>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="{{ url('/coordinador/listar/tipo/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </form>
</center>

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
