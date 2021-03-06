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
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
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



    <div class="col-md-10 col-md-offset-2">
      @yield('grupos')
      @yield('contenido')
      @yield('metas')
      @yield('preguntas')
      @yield('talleres')
      @yield('usuarios')
      @yield('alumnos')
      @yield('pre')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{  asset('js/jquery-3.3.1.min.js')  }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('scripts')
    @yield('jQuery')
    @yield('fecha')
    @yield('script-porcentajes')
    @yield('graficasScript')
  </body>
</html>
