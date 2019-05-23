@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Modificar Usuario</h2>
</div>
<center>
  <form method="post" action="/coordinador/modificar/usuario/{{$id}}" enctype="multipart/form-data">
    {{method_field('PUT')}}
    {{csrf_field()}}
      <div class="form-group col-md-4">
        <label>Nombre Usuario:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$usuario->name}}">
      </div>
      <div class="form-group col-md-4">
        <label>Email:</label>
        <input type="text" name="email" id="email" class="form-control" value="{{$usuario->email}}">
      </div>
      <div class="form-group col-md-4">
        <label>Contraseña:</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="{{ url('/coordinador/listar/usuario')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </form>
</center>
@include('footer')
