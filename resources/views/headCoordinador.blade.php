<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/footer.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/home">UCAGESTION</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Incidencias
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/coordinador/insertar/incidencia">Insertar</a>
        <a class="dropdown-item" href="/coordinador/listar/incidencia">Listar</a>
        <a class="dropdown-item" href="#">Modificar</a>
        <a class="dropdown-item" href="#">Eliminar</a>
      </div>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Handlings
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/coordinador/insertar/handling">Insertar</a>
      <a class="dropdown-item" href="/coordinador/listar/handling">Listar</a>
    </div>
  </li>
  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    Compañías
  </a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/coordinador/insertar/compania">Insertar</a>
    <a class="dropdown-item" href="/coordinador/listar/compania">Listar</a>
  </div>
</li>
<div class="dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown">Causantes
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="/coordinador/insertar/causante">Insertar</a></li>
      <li><a class="dropdown-item" href="/coordinador/listar/causante">Listar</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Tipos Causantes</li>
      <li><a class="dropdown-item" href="/coordinador/insertar/tipo">Insertar</a></li>
      <li><a class="dropdown-item" href="/coordinador/listar/tipo">Listar</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Relaciones</li>
      <li><a class="dropdown-item" href="/coordinador/relacionar/causante">Relacionar</a></li>
      <li><a class="dropdown-item" href="/coordinador/listar/relacion/causante">Listar Relación</a></li>
    </ul>
  </div>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Administración
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/coordinador/listar/usuario">Usuarios</a>
      <a class="dropdown-item" href="#">Informes</a>
    </div>
  </li>
    </ul>
  </div>
  <ul class="navbar-nav ml-auto">
  <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
  </li>
</ul>
</nav>
