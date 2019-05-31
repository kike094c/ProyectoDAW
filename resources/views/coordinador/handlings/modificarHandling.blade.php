@include('headCoordinador')
</br>
<?php if ($resultado!=""):?>
  <div class="alert alert-success" role="alert">
    <center>{{$resultado}}</center>
  </div>
<?php endif; ?>
<form method="post" action="/coordinador/modificar/handling/{{$id}}" enctype="multipart/form-data">
  {{method_field('PUT')}}
  {{csrf_field()}}
  <div class="panel-heading">
      <h2>Modificar Handling</h2>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nombre Handling</label>
      <input type="text" name="nombre" id="nombre" class="form-control" value="{{$handling->nombre}}">
    </div>
    <div class="form-group col-md-6">
      <label>IATA</label>
      <input type="text" name="iata" id="iata" class="form-control" value="{{$handling->iata}}">
    </div>
  </div>
  <center>
    <button type="submit" class="btn btn-primary">Modificar</button>
    <a href="{{ url('/coordinador/listar/handling/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>

@include('footer')
