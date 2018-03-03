<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="./../css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 logindiv">
          <h1 class="inicia-sesion">INICIA SESION</h1>

            <form class="" action="index.html" method="post">
              <div class="input-group input-group-lg col-md-10 col-md-offset-1">
                <input type="text" class="input-style form-control" placeholder="Usuario" aria-describedby="sizing-addon1">
                <span class="input-style input-group-addon" id="sizing-addon1">
                  <i class="glyphicon glyphicon-user"></i>
                </span>
              </div>
              <br>

              <div class="input-group input-group-lg col-md-10 col-md-offset-1">
                <input type="password" class="input-style form-control" placeholder="Contrasena" aria-describedby="sizing-addon1">
                <span class="input-group-addon input-style" id="sizing-addon1">
                  <i class="glyphicon glyphicon-lock"></i>
                </span>
              </div>
              <br>

              <button type="button" id="boton" class="btn btn-default btn-lg col-md-10 col-md-offset-1 btn1" id="">ACEPTAR</button>
              <div class="diva">
                <a href="#">Olvidaste tu contrasena?</a>
              </div>
          </form>
        </div>
      </div>

      </div>
    </div>

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/animaciones.js"></script>
</html>
