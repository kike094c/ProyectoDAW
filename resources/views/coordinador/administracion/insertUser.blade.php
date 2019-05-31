@include('headCoordinador')
</br>
<div class="panel-heading">
    <h2>Insertar Nuevo Usuario</h2>
</div>
<center>
  <form method="post" action="/coordinador/insertar/usuario" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="form-group col-md-4">
        <label>Nombre Usuario:</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label>Email:</label>
        <input type="text" name="email" id="email" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label>Contraseña:</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="form-group col-md-4">
        <label>Perfil</label>
        <select class="form-control" id="tipo" name="tipo">
          <option value="user">Usuario</option>
          <option value="admin">Administrador</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="{{ url('/coordinador/listar/usuario/')}}" class="btn btn-secondary" role="button">Cancelar</a>
  </form>
</center>
@include('footer')
