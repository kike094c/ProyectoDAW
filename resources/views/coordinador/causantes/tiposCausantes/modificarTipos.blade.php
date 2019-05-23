@include('headCoordinador')
</br>
<?php if ($resultado!=""):?>
  <div class="alert alert-success" role="alert">
    <center>{{$resultado}}</center>
  </div>
<?php endif; ?>
<center>
  <form method="post" action="/coordinador/modificar/tipo/{{$id}}" enctype="multipart/form-data">
    {{method_field('PUT')}}
    {{csrf_field()}}
    <div class="panel-heading">
        <h2>Modificar Tipo Causante</h2>
    </div>
      <div class="form-group col-md-6">
        <label>Nombre Tipo Causante</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$tipo->nombre}}">
      </div>

      <button type="submit" class="btn btn-primary">Modificar</button>
      <a href="{{ url('/coordinador/listar/tipo/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </form>
</center>
@include('footer')
