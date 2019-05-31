@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Insertar Nueva Compañía</h2>
</div>
<form method="post" action="/coordinador/insertar/compania" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="nombre">Nombre Compañía</label>
      <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="iata">IATA</label>
      <input type="text" class="form-control" name="iata" id="iata">
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
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ url('/coordinador/listar/compania/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>

@include('footer')
