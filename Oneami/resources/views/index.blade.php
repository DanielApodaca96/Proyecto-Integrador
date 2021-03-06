<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ONEAMI</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/icons/favicon.png') }}" />
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="padding-bottom: 0px;">

    <!-- Taller WELCOME -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">INICIO</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/icons/OneamiLogoBlack.svg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">BIENVENIDO</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">Bienvenido a nuestro sitio web, somos una asociación sin fines de lucro, que se encarga de ofrecer diversas pláticas, conferencias y talleres con el fin de contribuir en la formación y desarrollo de la sociedad. </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

		<nav class="navbar navbar-inverse" id="nav">
		  <div class="pad container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a href="#myCarousel"><img id="imglogo" alt="ONEAMI Escuela para Padres" src="{{ asset('img/icons/OneamiLogoWhite.svg') }}"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right" id="ul">
		        <li><a class="bluecolor" data-easing="easeInOutCubic" href="#mision"><b>MISIÓN</b></a></li>
		        <li><a class="bluecolor" data-easing="easeInOutCubic" href="#service"><b>SERVICIOS</b></a></li>
		        <li><a class="bluecolor" data-easing="easeInOutCubic" href="#talleres"><b>TALLERES</b></a></li>
		        <li><a class="bluecolor" data-easing="easeInOutCubic" href="#logros"><b>LOGROS</b></a></li>
		        <li><a class="bluecolor" data-easing="easeInOutCubic" href="#contacto"><b>CONTACTO</b></a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

    <!-- Carousel
    ============================================================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active slider-indicator"></li>
    <li data-target="#myCarousel" data-slide-to="1" class="slider-indicator"></li>
    <li data-target="#myCarousel" data-slide-to="2" class="slider-indicator"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active responsive-img first-slide">
      <div class="carousel-caption move">
          <div class=".col-md-6 .col-md-offset-3 introtext">
            <div class="firstText">Hagamos de la familia</div>
            <div class="secondText">UN MEJOR LUGAR PARA CRECER</div>
            <a href="https://www.facebook.com/direcciononeamincg/?ref=br_rs"><button type="button" class="btn-xl btn-warning btnradius focus">SABER MÁS</button></a>
          </div>
      </div>
    </div>

    <div class="item responsive-img second-slide">
      <div class="carousel-caption move">
          <div class=".col-md-6 .col-md-offset-3 introtext">
            <div class="firstText">Porque para educar</div>
            <div class="secondText">HAY QUE EDUCARSE A SÍ MISMO</div>
<a href="https://www.facebook.com/direcciononeamincg/?ref=br_rs"><button type="button" class="btn-xl btn-warning btnradius focus">SABER MÁS</button></a>
          </div>
      </div>
    </div>

    <div class="item responsive-img third-slide">
      <div class="carousel-caption move">
          <div class=".col-md-6 .col-md-offset-3 introtext">
            <div class="firstText">La vida debe ser</div>
            <div class="secondText">UNA INCESANTE educación</div>
<a href="https://www.facebook.com/direcciononeamincg/?ref=br_rs"><button type="button" class="btn-xl btn-warning btnradius focus">SABER MÁS</button></a>
          </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- ===================================================/.carousel -->

<section id="mision">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3" style="text-align:center;">
         <div class="title animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">MISIÓN</div>
         <div class="subtitle animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="80" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
           ____________
         </div>
         <div class="subtitle" style="padding:0;">
           Incrementar el número de padres de familia que ejerzan una paternidad responsable para mejorar la calidad de vida en las familias en la región de Nuevo Casas Grandes.
         </div>
         <br>
<a href="https://www.facebook.com/direcciononeamincg/?ref=br_rs"><button type="button" class="btn-xl btn-warning btnradius focus">SABER MÁS</button></a>
      </div>
    </div>
  </div>
</section>

    <!-- seccion de servicios -->
    <section id="service">

          <div class="container-fluid">
            <div class="row">
             <div class="col-md-12 col-sm-12" style="text-align:center;color: white;">
                <div class="title animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">SERVICIOS</div>
                <div class="subtitle animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="80" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">Te presentamos nuestros servicios más destacados</div>

              <div class="col-md-4 col-lg-4 ser animateme scrollme" data-when="enter" data-from="0.9" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <div class="redondear">
                    <img class="icon-space2 tamanio" src="{{ asset('img/icons/platica.svg') }}" alt="">
                </div><br>
                <div class="item-titulobigger">PlÁticas</div>
                <div class="justify"> Reuniones de expertos que debaten <br> sobre un tema o el intercambio de opiniones <br>en el marco de una conferencia.</div>
              </div>

              <div class="col-md-4 col-lg-4 ser animateme scrollme" data-when="enter" data-from="0.7" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <div class="redondear">
                    <img class="icon-space2 tamanio" src="{{ asset('img/icons/workshop.svg') }}" alt="">
                </div><br>
                <div class="item-titulobigger">Talleres</div>
                  <div class="justify"> Metodologías de enseñanza que combina <br> la teoría y la práctica. Permiten el desarrollo<br> del trabajo en equipo. </div>
              </div>

              <div class="col-md-4 col-lg-4 ser animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <div class="redondear">
                  <img class="icon-space2 tamanio" src="{{ asset('img/icons/family.svg') }}" alt="">
                </div><br>
                <div class="item-titulobigger">Orientaciones Familiares</div>
                  <div class="justify">Técnicas y prácticas profesionales <br> dirigidas a fortalecer las capacidades y los vínculos <br> que unen a los miembros de una familia.</div>
              </div>
            </div>
           </div>
        </div>
    </section>

    <section id="talleres">
      <div class="container">
        <div class=".col-md-6 .col-md-offset-3 section-title">
          <div class="title animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">NUESTROS TALLERES</div>
          <div class="subtitle animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="80" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">Te ofrecemos los siguientes talleres</div>
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.3" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller1" data-toggle="modal" data-target=".taller1">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/EducacionAdultos.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">EducaciÓn continua y compartida de adultos</div>
                </div>

              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller2" data-toggle="modal" data-target=".taller2">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/CrecimientoPersonal.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">Crecimiento personal</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.7" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller3" data-toggle="modal" data-target=".taller3">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/EducacionSexual.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">EducaciÓn sexual</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.9" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller4" data-toggle="modal" data-target=".taller4">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/Paz.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">Construyamos un mundo de paz</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.1" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller5" data-toggle="modal" data-target=".taller5">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/Estres.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">Domina el manejo del estrés</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.3" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller6" data-toggle="modal" data-target=".taller6">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/Eficaces.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">Padres eficaces con entrenamiento sistemÁtico</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller7" data-toggle="modal" data-target=".taller7">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/Valores.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">Domina los valores</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 taller-items animateme scrollme" data-when="enter" data-from="0.7" data-to="0" data-crop="false" data-opacity="0" data-translatey="200" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">
                <a class="item-link" href="#taller8" data-toggle="modal" data-target=".taller8">
                  <div class="item-hover">
                    <div class="item-icon">
                      <i class="glyphicon glyphicon-plus"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{ asset('img/talleres/Optimismo.jpg') }}" alt="">
                </a>
                <div class="taller-frase">
                  <div class="item-titulo">Domina el optimismo</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Taller 1 MODAL -->
    <div class="modal fade taller1" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">EDUCACIÓN CONTINUA Y COMPARTIDA DE ADULTOS</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/EducacionAdultos.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">Identificar las etapas de la vida de un individuo y los estilos de vida familiar que ayuden a entender las relaciones que se mantienen entre los miembros de la familia y reflexionar sobre como mejorar la relación familiar.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 2 MODAL -->
    <div class="modal fade taller2" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">CRECIMIENTO PERSONAL</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/CrecimientoPersonal.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo de este taller es desarrollar capacidades, potencialidades y superar situaciones personales modificando conductas y actitudes para desempeñarse mejor como individuos.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 3 MODAL -->
    <div class="modal fade taller3" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">EDUCACIÓN SEXUAL</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/EducacionSexual.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo de este taller es dar herramientas para una adecuada educación sexual para prevenir problemas graves como el abuso sexual en la niñez, adolesencia y en la edad adulta.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 4 MODAL -->
    <div class="modal fade taller4" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">CONSTRUYAMOS UN MUNDO DE PAZ</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/Paz.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo de este taller es reconocer que la violencia familiar es un problema social, responsabilidad de todos y que es posible prevenirla y atenderla a partir de orientar a los padres de familia sobre qué pueden hacer para convivir sin ella.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 5 MODAL -->
    <div class="modal fade taller5" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">DOMINA EL MANEJO DEL ESTRÉS</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/Estres.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo de este taller es alcanzar un buen estado de salud mediante una alimentación sana, ejercicio, descanso, así como cambiar nuestra mentalidad, nuestro cuerpo y las situaciones, eliminando las reacciones de estrés, aprendiendo a sustituirlas por reacciones relajantes.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 6 MODAL -->
    <div class="modal fade taller6" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">PADRES EFICACES CON ENTRENAMIENTO SISTEMÁTICO</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/Eficaces.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo principal es promover el respeto mutuo, el amor, las responsabilidades, así como aprender a crear una atmósfera que facilite el desarrollo integral de los hijos.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 7 MODAL -->
    <div class="modal fade taller7" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">DOMINA LOS VALORES</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/Valores.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo de este taller es poner en práctica los valores universales para que nos den felicidad, nos enriquezcan y nos hagan crecer como personas, como seres humanos.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Taller 8 MODAL -->
    <div class="modal fade taller8" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">DOMINA EL OPTIMISMO</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <img class="img-fluid col-md-8 col-md-offset-2" src="{{ asset('img/talleres/Optimismo.jpg') }}" alt="">
            </div>
            <div class="row">
              <div class="title modal-des">DESCRIPCIÓN</div>
              <p class="modal-text sans col-md-8 col-md-offset-2 text-justify">El objetivo de este taller es usar el optimismo inteligente para ejercitar el pensamiento que es el que determina nuestros sentimientos y comportamientos. <br><br> Ser optimista es una elección nuestra y esta a nuestro alcance como lo están nuestros pensamientos, nosotros tenemos control sobre ellos.</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <section id="logros" class="logros" style="padding-bottom: 100px; margin-top: 80px;">
      <div class="white txtalign title animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">LOGROS</div>
      <div class="white txtalign subtitle animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="80" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">En nuestra historia hemos atendido más de</div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-lg-4 logro">
              <div class="numeros animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">5,595</div>
              <div class="white txtalign item-titulo">Personas en talleres</div>

            </div>
            <div class="col-md-4 col-lg-4 logro">
              <div class="numeros animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">328</div>
              <div class="white txtalign item-titulo">Personas en orientaciones familiares</div>

            </div>
            <div class="col-md-4 col-lg-4 logro">
              <div class="numeros animateme scrollme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-translatey="100" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);">5,194</div>
              <div class="white txtalign item-titulo">Personas en conferencias</div>

            </div>
          </div>
        </div>
    </section>
    <section id="contacto">
      <div class="container margin">
        <div class="row extender">
          <div class="col-md-8 mapa animateme scrollme">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.8692651399965!2d-107.90338639885294!3d30.429844552599327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dcadb26c9c15d3%3A0xaa7bb7e82b776d24!2sfundacion+dem+empresariado+chihuahuense+a.c.!5e0!3m2!1ses-419!2smx!4v1517452202045"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-4">
            <div class="title" style="padding-top:30px;font-size:30px;">CONTACTO</div>
            <div class="subtitle" style="padding-bottom:0px;font-size:20px;">Una organización única en la región</div>

            <form class="form-horizontal">
              <div class="form-group input-lg" >
                <label for="inputName" class="col-sm-1 control-label font-label">Nombre</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control sans" id="inputName" placeholder="Nombre">
                </div>
              </div>
              <div class="form-group input-lg ">
                <label for="inputEmail3" class="col-sm-1 control-label font-label">Correo</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control sans" id="inputEmail3" placeholder="Correo">
                </div>
              <label for="t-area" class="col-sm-1 control-label font-label">Mensaje</label>
              <div class="col-sm-12">
                <textarea class="form-control form-group col-md-12 sans" id="t-area" placeholder="Mensaje" rows="5"></textarea>
              </div>

              <div class="col-sm-12">
                <button type="button" id="btnenviar" class=" btn btn-primary btn-lg btn-block focus" style="text-transform:uppercase;">Enviar</button>
              </div>
            </div>


            </form>
          </div>

        </div>
      </div>


    </section>

      <footer id="footer">
        <div class="container-fluid">
          <div class="row">
           <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3" style="text-align:center;color: gray;">
             <img id="midLogo" src="{{ asset('img/icons/OneamiMid.svg') }}" alt=""><br>
             Pablo VI No. 1430 Fraccionamiento Juan Pablo II C.P. 31704 <br>
             <b>Nuevo Casas Grandes, Chihuahua</b><br>
             <div class="col-md-4">
               <a target="_blank" href="https://www.facebook.com/direcciononeamincg/?ref=br_rs"> <img class="icon-space" src="{{ asset('img/icons/fb.svg') }}" alt=""><br>Oneami escuela para padres</a>
             </div>
             <div class="col-md-4"><img class="icon-space" src="{{ asset('img/icons/phone.svg') }}" alt=""><br>(636)-109-38-75</div>
             <div class="col-md-4"><img class="icon-space" src="{{ asset('img/icons/arroba.svg') }}" alt=""><br>oneamidireccionncg@hotmail.com</div>


           </div>
         </div>
        </div>
      </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{  asset('js/jquery-3.3.1.min.js')  }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>
    <script src="{{ asset('js/animaciones.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script src="{{ asset('js/jquery.scrollme.min.js') }}"></script>
    <script type="text/javascript">
      $(window).on('load',function(){
          $('#myModal').modal('show');
      });
    </script>
  </body>
</html>
