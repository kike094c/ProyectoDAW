@if(Auth::user()->hasRole('admin'))
  @include('headCoordinador')
</br>
<center>
<h2>Bienvenido, {{Auth::user()->name}} </h2>
<h4>Utiliza la barra de navegación para moverte por la aplicación</h4>
</br>
</center>
  @include('footer')
@else
  @include('head')
</br>
<center>
<h2>Bienvenido, {{Auth::user()->name}} </h2>
<h4>¿Qué deseas realizar?</h4>
<a href="/tecnico/insertar/incidencia" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-pencil"></span> Añadir Incidencia</a></br>
<a href="/tecnico/listar/incidencia" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-list"></span> Mostrar Incidencias</a></br>
</center>
  @include('footer')
@endif
