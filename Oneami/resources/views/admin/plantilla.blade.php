<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('Titulo')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.png') }}" />

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/adminPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse col-md-10 col-sm-10 col-xs-10">
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

    <nav class="navbar-default sidebar leftPane2">
      <img class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" id="imglogo" alt="ONEAMI Escuela para Padres" src="../img/icons/OneamiLogoWhite.svg">
      <div class="navName">MENU</div>
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="{{ url('/panel-de-administracion')}}"><i class="fas fa-home padRight"></i>Inicio</a></li>
        <li role="presentation"><a href="#"><i class="fas fa-users padRight"></i>Grupos</a></li>
        <li role="presentation"><a href="{{ url('/panel-de-administracion/talleres')}}"><i class="fas fa-book padRight"></i>Talleres</a></li>
        <li role="presentation"><a href="#"><i class="fas fa-user padRight"></i>Alumnos</a></li>
      </ul>

      <div class="navName">ADMINISTRACION</div>
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="#"><i class="fas fa-chart-line padRight"></i>Estadisticas</a></li>
        <li role="presentation"><a href="#"><i class="fas fa-user-plus padRight"></i>Usuarios</a></li>
      </ul>
    </nav>

    <div class="container col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2">
      @yield('contenido')
      @yield('metas')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('scripts')
    @yield('script-porcentajes')
  </body>
</html>
