
<nav class="navbar-default sidebar leftPane2 col-md-2">
  <img class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" id="imglogo" alt="ONEAMI Escuela para Padres" src="../img/icons/OneamiLogoWhite.svg">
  <div class="navName">MENU</div>
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation"><a href="{{ url('/panel-de-administracion') }}"><i class="fas fa-home padRight"></i>Inicio</a></li>
    <li role="presentation"><a href="{{ url('/panel-de-administracion/grupos') }}"><i class="fas fa-users padRight"></i>Grupos</a></li>
    <li role="presentation"><a href="{{ url('/panel-de-administracion/talleres')}}"><i class="fas fa-book padRight"></i>Talleres</a></li>
    <li role="presentation"><a href="{{ url('/panel-de-administracion/alumnos') }}"><i class="fas fa-user padRight"></i>Alumnos</a></li>
  </ul>

  <div class="navName">ADMINISTRACIÓN</div>
  <ul class="nav nav-pills nav-stacked">
    <li role="presentation"><a href="#"><i class="fas fa-chart-line padRight"></i>Estadísticas</a></li>
    <li role="presentation"><a href="{{ url('/panel-de-administracion/usuarios') }}"><i class="fas fa-user-plus padRight"></i>Usuarios</a></li>
    <li role="presentation"><a href="{{ url('/panel-de-administracion/metas') }}"><i class="fas fa-calendar-check padRight"></i>Metas</a></li>
    <li role="presentation"><a href="{{ url('/panel-de-administracion/preguntas') }}"><i class="fas fa-question-circle padRight"></i>Preguntas</a></li>
  </ul>
</nav>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-md-4">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
