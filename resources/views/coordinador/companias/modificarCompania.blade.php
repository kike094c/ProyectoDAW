@include('headCoordinador')
</br>
<?php if ($resultado!=""):?>
  <div class="alert alert-success" role="alert">
    <center>{{$resultado}}</center>
  </div>
<?php endif; ?>
<form method="post" action="/coordinador/modificar/compania/{{$id}}" enctype="multipart/form-data">
  {{method_field('PUT')}}
  {{csrf_field()}}
  <div class="panel-heading">
      <h2>Modificar Compañía</h2>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Nombre Compañía</label>
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{$compania->nombre}}">
    </div>
    <div class="form-group col-md-4">
      <label>IATA</label>
      <input type="text" name="iata" id="iata" class="form-control" value="{{$compania->iata}}">
    </div>
    <div class="form-group col-md-4">
            <label for="handling">Handling Asociado</label>
            <select class="form-control" name="handling" id="handling">
                @foreach($handlings as $handling)
                <option value="{{$handling->id}}">{{$handling->nombre}}</option>
                @endforeach
            </select>
        </div>
  </div>
  <center>
    <button type="submit" class="btn btn-primary">Modificar</button>
    <a href="{{ url('/coordinador/listar/compania/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>

@include('footer')
