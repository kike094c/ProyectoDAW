@if(Auth::user()->hasRole('admin'))
    @else
        <div>Debe loguearse como administrador</div>
    @endif
@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Insertar Nuevo Handlings</h2>
</div>
<form method="post" action="/coordinador/insertar/handling" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nombre Handling</label>
      <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label>IATA</label>
      <input type="text" name="iata" id="iata" class="form-control">
    </div>
  </div>
  <center>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ url('/coordinador/listar/handling/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>

@include('footer')
