<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reportes</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.png') }}" />

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/reportes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="todo">
      <div class="row">
        <div class="col-md-2 col-md-offset-2 col-xs-4 ">
          <a class="navbar-brand" >
              <img id="midLogo" src="{{ asset('img/icons/OneamiLogoBlack.svg') }}" alt="">
          </a>
        </div>
        <div class="col-md-4 col-xs-6 col-md-offset-2 col-xs-offset-2">
          <h2 class="color-gray align-right">Lista de Alumnos.</h2>
          <h5 class="fecha color-gray align-right">Fecha {{ date('Y-m-d h:m:s') }}</h5>
        </div>
      </div>
      <hr>
    </div>
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    function imprimir(elemento){
      var respaldo = $('body').html();
      var div = $('#'+elemento).clone();
      $('body').empty().html(div);
      window.print();
      $('body').html(respaldo);
    }
    $(document).ready(function(){
      imprimir('todo');
    });
  </script>

</html>
