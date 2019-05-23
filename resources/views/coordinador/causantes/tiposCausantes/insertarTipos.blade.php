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
    <center>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="{{ url('/coordinador/listar/tipo/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </form>
</center>

@include('footer')
