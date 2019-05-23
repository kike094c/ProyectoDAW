@include('headCoordinador')
</br>
<div class="panel-heading">
      <h2>Relacionar Causantes</h2>
</div>
<form method="post" action="/coordinador/relacionar/causante" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6">
            <label for="causante">Selecciona Causante</label>
            <select class="form-control" name="causante" id="causante">
                @foreach($caus as $cau)
                <option value="{{$cau->id}}">{{$cau->nombre}} - {{$cau->tipo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
                <label for="tipo">Selecciona Tipo Causante</label>
                <select class="form-control" name="tipo" id="tipo">
                    @foreach($tiposc as $tipoc)
                    <option value="{{$tipoc->id}}">{{$tipoc->nombre}}</option>
                    @endforeach
                </select>
            </div>
    </div>
  <center>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ url('/coordinador/listar/relacion/causante/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </center>
</form>

@include('footer')
