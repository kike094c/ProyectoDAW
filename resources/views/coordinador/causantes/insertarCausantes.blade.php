@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Insertar Nuevo Causante</h2>
</div>
<center>
  <form method="post" action="/coordinador/insertar/causante" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="form-group col-md-4">
        <label>Nombre Causante</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label>Tipo de incidenca</label>
        <select class="form-control" id="tipoInc" name="tipoInc">
          <option value="hdw">HARDWARE</option>
          <option value="sfw">SOFTWARE</option>
          <option value="usr">USUARIO</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="{{ url('/coordinador/listar/causante/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </form>
</center>
@include('footer')
