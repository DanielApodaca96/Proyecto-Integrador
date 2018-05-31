    @if($errors->any())
      <div class="conf alert alert-warning alert-dismissible fade in MensajeAlerta">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">x</a>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(session()->has('mensaje'))
      <div class="conf alert alert-success alert-dismissible fade in MensajeAlerta" data-backdrop="static">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">x</a>
        {{ session()->get('mensaje') }}
      </div>
    @endif

@extends('admin.plantilla')
@extends('includes.navAdmin')

@section('grupos')

  <div class="row">
    <div class="title" style="text-align: center; padding-top:110px;">Grupos</div>
    <div class="subtitle" style="text-align: center">Consulta, agrega y elimina.</div>
    <form class="" action="/administracion/grupos/ajaxGrafica" method="post">
      <!-- <button type="submit" name="button">sdfdsf</button> -->
      <input type="hidden"  value="{{ csrf_token() }}" name="_token">
    </form>
  </div>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <div class="input-group">
        <!-- <input type="text" class="form-control" placeholder="Buscar alumno...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span> -->
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div>
  <button type="button" class="btnagregar navbar-right btnCirculo" data-toggle="modal" data-target=".grupos">
      <i class="glyphicon glyphicon-plus"></i>
  </button>
  <div class="row">
    <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:30px; padding-right:30px;">
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>
              @foreach($grupos as $g)



              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">

                  <button class="navbar-right btn btnedit" type="button"  data-toggle="modal" data-target=".eliminar2{{ $g->id_grupo }}">
                    <i class="glyphicon glyphicon-trash"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade eliminar2{{ $g->id_grupo }}" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Eliminando el grupo: {{ $g->nom_grupo }}</h4>
                        </div>
                        <div class="modal-body">
                          <i class="glyphicon glyphicon-exclamation-sign deleteWarning"></i>
                          <p class="">¿Estás seguro/a de que deseas eliminar este grupo de forma permanente junto con todo su contenido?</p>
                        </div>
                        <div class="modal-footer">

                          <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                            {!!  Form::open(array( 'route'=>['admin.grupos.destroy', $g->id_grupo], 'method'=>'delete' ))  !!}
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="btnborrar" class="btn btn-danger">Eliminar</button>
                            {!!  Form::close()  !!}
                        </div>
                      </div>
                    </div>
                  </div>

                  <h4 class="panel-title">
                    @forelse($taller as $t)
                    @if($t->id_taller==$g->id_taller)
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{  $g->id_grupo  }}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                      {{  $g->nom_grupo . " #" . $g->num_grupo  }} {{" " . $t->nombre_taller}}
                    </a>
                    @endif
                    @empty
                      <p>Sin Registros</p>
                    @endforelse
                  </h4>
                </div>

                <div id="collapse{{  $g->id_grupo  }}" class="panel-collapse collapse reporte" role="tabpanel" aria-labelledby="headingOne" expanded="false">
                  <div class="panel-body" style="">
                    <table class="table table-striped">
                      <thead>
                        <tr>

                          <th>Nombre</th>
                          <th>Apellido P.</th>
                          <th>Apellido M.</th>
                          <th>Edad</th>
                          <th>Telefono</th>
                          <th>Sexo</th>
                          <th>Estado Civil</th>
                          <th>Escolaridad</th>
                        </tr>
                      </thead>
                      <tbody>
                        <input type="hidden" name="" value="{{ csrf_token() }}" id="token">
                        @forelse($grupos2 as $alu)
                        <tr>
                          @if($alu->id_grupo==$g->id_grupo)

                          <th>{{ $alu->nombre }}</th>
                          <th>{{ $alu->apellidoP }}</th>
                          <th>{{ $alu->apellidoM }}</th>
                          <th>{{ $alu->edad }}</th>
                          <th>{{ $alu->telefono }}</th>
                          <th>{{ $alu->sexo }}</th>
                          <th>{{ $alu->estado_civil }}</th>
                          <th>{{ $alu->escolaridad }}</th>
                          <th>
                              <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btn btnedit"
                              data-nombre="{{ $alu->nombre }}"
                              data-id="{{  $alu->id_persona  }}"
                              data-ap="{{  $alu->apellidoP  }}"
                              data-am="{{  $alu->apellidoM  }}"
                              data-edad="{{  $alu->edad  }}"
                              data-sexo="{{  $alu->sexo  }}"
                              data-telefono="{{  $alu->telefono  }}"
                              data-estado="{{  $alu->estado_civil  }}"
                              data-escolaridad="{{  $alu->escolaridad  }}"
                              >
                                <i class="glyphicon glyphicon-pencil"></i>
                              </button>

                          </th>
                          <th>
                            <button class="btn" type="button"  data-toggle="modal" data-target=".eliminar{{ $alu->id_persona }}">
                              <i class="glyphicon glyphicon-trash"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade eliminar{{ $alu->id_persona }}" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Dando de baja a: {{ $alu->nombre }}</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>¿Estás seguro/a de que deseas dar de baja de este grupo?</p>
                                  </div>
                                  <div class="modal-footer">

                                    <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                                    {!!  Form::open(array( 'route'=>['admin.inscripcion.destroy', $alu->id_inscripcion], 'method'=>'delete' ))  !!}
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                      <button type="submit" name="btnborrar" class="btn btn-danger">Eliminar</button>
                                    {!!  Form::close()  !!}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </th>

                          <th>

                            <button type="button" class="btn btn-success btn-sm btnevaluacion1" name="evaluacion1" data-toggle="modal" data-target="#myModal"
                            data-id="{{  $alu->id_persona  }}",
                            data-inscripcion="{{  $alu->id_inscripcion  }}">
                            Pre
                            </button>
                          </th>
                          <th>
                            <button type="button" class="btn btn-success btn-sm btnevaluacion2" name="evaluacion2" data-toggle="modal" data-target="#myModal2"
                            data-id="{{  $alu->id_persona  }}",
                            data-inscripcion="{{  $alu->id_inscripcion  }}">
                            Post
                            </button>
                          </th>
                          <th>
                            {!!  Form::open(array( 'url'=>['/administracion/post_evaluacion/'.$alu->id_persona], 'method'=>'GET' ))  !!}
                            <button type="submit" class="btn btn-success btn-sm btnGrafica" name="btnGrafica"
                            data-id="{{  $alu->id_persona  }}",
                            data-inscripcion="{{  $alu->id_inscripcion  }}">
                            Grafica
                            </button>

                            {!!  Form::close()  !!}
                          </th>

                          @endif
                        </tr>
                        @empty
                          <p>Sin Registros</p>
                        @endforelse
                      </tbody>
                      </table>
                  </div>
                </div>

              </div>
              </div>
              @endforeach
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


  <!-- Modal Evaluacion-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Realizando Pre-Evaluación</h4>
        </div>
        <div class="modal-body">


        @forelse($cate as $pr)

        @if(count($pr)>=1)
        {{  Form::open(array('url'=>'/administracion/resultados' , 'id'=>'FormPre' . $pr->id_pregunta)  )}}

        @if($pr->tipo_respuesta=="2 Opciones")
          <input type="hidden" name="id_inscripcion" class="id_inscripcion" value="">
          <input type="hidden" name="id_categoria" class="id_categoria" value="{{  $pr->id_categoria }}">
          <input type="hidden" name="tipo" class="tipo" value="pre">
          <input type="hidden" name="id_persona" class="id_persona" value=""><br>
          <!-- <label for="">{{ $pr->id_pregunta.".-" }}&nbsp; </label> -->
          <label for="" style="font-size: 1.5rem;">{{ $pr->pregunta }}</label>
          <input type="hidden" name="id_pregunta" id="id_pregunta" value="{{ $pr->id_pregunta}}">
          <div class="from-group">
            <select class="form-control" name="porcentaje">
              <option value="100">Si</option>
              <option value="0">No</option>
            </select>

          </div>
          <button type="button" class="contestar btn btn-success">Enviar</button>

        @else
          <input type="hidden" name="id_inscripcion" class="id_inscripcion" value="">
          <input type="hidden" name="id_categoria" class="id_categoria" value="{{  $pr->id_categoria }}">
          <input type="hidden" name="tipo" class="tipo" value="pre">
          <input type="hidden" name="id_persona" class="id_persona" value=""><br>
          <!-- <label for="">{{ $pr->id_pregunta.".-" }}&nbsp; </label> -->
          <label for="" style="font-size: 1.5rem;">{{ $pr->pregunta }}</label>
          <input type="hidden" name="id_pregunta" id="id_pregunta" value="{{ $pr->id_pregunta}}">

          <div class="from-group">
            <select class="form-control" name="porcentaje">
              <option value="100">100</option>
              <option value="75">75</option>
              <option value="50">50</option>
              <option value="25">25</option>
              <option value="0">0</option>
            </select>

          </div>
          <button type="button" class="contestar btn btn-success">Enviar</button>


            @endif

        {{  Form::close() }}
        @endif
        @empty
          <p>Sin registros</p>
        @endforelse

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Evaluacion 2-->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Realizando Post-Evaluación</h4>
        </div>
        <div class="modal-body">


        @forelse($cate as $pr)


        {{  Form::open(array('url'=>'/administracion/resultados', 'id'=>'FormPost' . $pr->id_pregunta )) }}
        @if($pr->tipo_respuesta=="2 Opciones")
        <input type="hidden" name="id_inscripcion" class="id_inscripcion" value="">
        <input type="hidden" name="id_categoria" class="id_categoria" value="{{  $pr->id_categoria }}">
        <input type="hidden" name="tipo" class="tipo" value="post">
        <input type="hidden" name="id_persona" class="id_persona" value=""><br>
        <label for="">{{ $pr->id_pregunta.".-" }}&nbsp; </label><label for="" style="font-size: 1.5rem;">{{ $pr->pregunta }}</label>
        <input type="hidden" name="id_pregunta" id="id_pregunta" value="{{ $pr->id_pregunta}}">
        <div class="from-group">
          <select class="form-control" name="porcentaje">
            <option value="100">Si</option>
            <option value="0">No</option>

          </select>
        </div>
        <button type="button" class="contestar btn btn-success">Enviar</button>
        @else
        <input type="hidden" name="id_inscripcion" class="id_inscripcion" value="">
        <input type="hidden" name="id_categoria" class="id_categoria" value="{{  $pr->id_categoria }}">
        <input type="hidden" name="tipo" class="tipo" value="post">
        <input type="hidden" name="id_persona" class="id_persona" value=""><br>
        <label for="">{{ $pr->id_pregunta.".-" }}&nbsp; </label><label for="" style="font-size: 1.5rem;">{{ $pr->pregunta }}</label>
        <input type="hidden" name="id_pregunta" id="id_pregunta" value="{{ $pr->id_pregunta}}">



          <div class="from-group">
            <select class="form-control" name="porcentaje">
              <option value="100">100</option>
              <option value="75">75</option>
              <option value="50">50</option>
              <option value="25">25</option>
              <option value="0">0</option>
            </select>

          </div>
          <button type="button" class="contestar btn btn-success">Enviar</button>
          @endif


        {{  Form::close() }}
        @empty
          <p>Sin registros</p>
        @endforelse
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Evaluacion-->
  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Grafica de comparacion</h4>
        </div>
        <div class="modal-body">

          <div class="row">
              <h4 class="titleGraphs">Mejoria entre el PRE y POST</h4>
              <canvas id="myChart1" width="400" height="400"></canvas>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade grupos" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega un grupo nuevo.</h4>
        </div>
        <div class="modal-body">
          <div class="card-body">
            {{ Form::open (array('url'=>'/administracion/grupos')) }}
            <fieldset>
              <div class="form-group">
                <label for="">Nombre</label>
                  {{ Form::text('nom_grupo','',array('class'=>'form-control','placeholder'=>'Nombre')  )}}
              </div>

              <div class="form-group">
                <label for="">Numero de Grupo</label>
                {{ Form::text('num_grupo','',array('class'=>'form-control','placeholder'=>'Numero de Grupo'))}}
              </div>
              <div class="form-group">
                <label>Taller</label><br>
                <select class="t form-control" name="id_taller">
                  @forelse($taller as $t)
                    <option value="{{$t->id_taller}}">{{ $t->nombre_taller }}</option>
                  @empty
                    <option value=""></option>
                  @endforelse
                </select>
              </div>
            </fieldset>


            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              {{ Form::submit('Aceptar',array('class'=>'btn btn-primary')  )}}
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class="modal fade editar" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Editar a: <b id="nomModal">Daniel</b>.</h4>
        </div>

        @if(count($alumnos)>=1)
            {!!  Form::open(array('route'=>['admin.alumnos.edit', 0], 'method'=>'GET' ))  !!}
              <div class="modal-body">

                <input type="hidden" name="id" id="idEditar" value="">

                <div class="form-group">
                  <label for="">Nombre</label>
                  <input type="text" name="nameNombre" id="nameNombre" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Apellido P</label>
                  <input type="text" name="nameApellidoP" id="nameApellidoP" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Apellido M</label>
                  <input type="text" name="nameApellidoM" id="nameApellidoM" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Edad</label>
                  <input type="text" name="nameEdad" id="nameEdad" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Telefono</label>
                  <input type="text" name="nameTelefono" id="nameTelefono" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Sexo</label>
                  <select class="form-control" name="editarSexo" id="editarSexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Estado civil</label>
                  <select class="form-control" name="editarEstado" id="editarEstado">
                    <option value="Soltero/a">Soltero/a</option>
                    <option value="Casado/a">Casado/a</option>
                    <option value="Divorciado/a">Divorciado/a</option>
                    <option value="Viudo/a">Viudo/a</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Escolaridad</label>
                  <select class="form-control" name="editarEscolaridad" id="editarEscolaridad">
                    <option value="Primaria">Primaria</option>
                    <option value="Secundaria">Secundaria</option>
                    <option value="Media Superior">Media Superior</option>
                    <option value="Superior">Superior</option>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dagner" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
            {!! Form::close() !!}
          @endif
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->





@endsection
@section('jQuery')
  <script type="text/javascript">
    $(document).ready(function(){
      $(".btnedit").on("click", function(){
        var nom=$(this).data('nombre');
        var i = $(this).data('id');
        var ap = $(this).data('ap');
        var am = $(this).data('am');
        var edad = $(this).data('edad');
        var sexo = $(this).data('sexo');
        var telefono = $(this).data('telefono');
        var estado = $(this).data('estado');
        var escolaridad = $(this).data('escolaridad');

        //var em=$(this).data('email');
        $("#idEditar").val(i);
        $('#nameNombre').val(nom);
        $('#nameApellidoP').val(ap);
        $('#nameApellidoM').val(am);
        $('#nameEdad').val(edad);
        $('#editarSexo').val(sexo);
        $('#nameTelefono').val(telefono);
        $('#editarEstado').val(estado);
        $('#editarEscolaridad').val(escolaridad);
        $("#nomModal").text(nom);

      });

      //Evento para el input
      $('#txtBusqueda').on('keyup', function(){
        $.ajax({
          method: 'POST',
          url: '/administracion/grupos/buscar',
          data: {
            nombre: $('#txtBusqueda').val(),
            _token: $('#token').val()
          },
          beforeSend: function(){
            console.log('Cargando...');
          }
        }).done(function(respuesta){
          var arreglo = JSON.parse(respuesta);

          $("#tbody").find('tr').remove();
          for(var x=0; x<arreglo.length; x++){
            var todo="";
            $("#tbody").append(todo);
          }
          console.log(arreglo);
        })

      });

      $('.btnevaluacion1').on("click", function(){
        var per=$(this).data('id');
        var ins=$(this).data('inscripcion')

        var preg=$(this).data('pregunta')
        $('.id_persona').val(per);
        $('.id_inscripcion').val(ins);



        var form = $(this).parent('form');
        $.ajax({
          url:'/administracion/grupos/ajax2',
          method:'POST',
          data:{
            nombre: per,
            tipo: 'pre',
            _token: $('#token').val()
          }
        }).done(function(res){
            var convert = JSON.parse(res);
            for(var x=0; x<convert.length; x++){
              $('#FormPre'+ convert[x].id_pregunta).hide();
            }
        });

      });

      $('.btnGrafica').on("click", function(){
          var per=$(this).data('id');
         console.log(per);
          $.ajax({
            url:'/administracion/post_evaluacion/ajaxGrafica',
            method:'POST',
            data:{
              nombre: per,
              _token: $('#token').val()}
          }).done(function(res){
            var arr=res.split('#');
            console.log(res);
          });
      });

      $('.btnevaluacion2').on("click", function(){
        var per=$(this).data('id');
        var ins=$(this).data('inscripcion')
        var preg=$(this).data('pregunta')
        $('.id_persona').val(per);
        $('.id_inscripcion').val(ins);

        var form = $(this).parent('form');
        $.ajax({
          url:'/administracion/grupos/ajax2',
          method:'POST',
          data:{
            nombre: per,
            tipo: 'post',
            _token: $('#token').val()
          }
        }).done(function(res){
            var convert = JSON.parse(res);
            console.log(res);
            for(var x=0; x<convert.length; x++){
              $('#FormPost'+ convert[x].id_pregunta).hide();
            }
        });
      });

      $('.contestar').on("click",function(){
        var form = $(this).parent('form');
        $.ajax({
          url:$(this).parent('form').attr('action'),
          method:'POST',
          data:$(this).parent('form').serialize()
        }).done(function(res){
          console.log(res);
          var x = parseInt(res);
          if(x==1){
            form.fadeOut(200);
          }
        });
        });
    });

  </script>
  <!-- <script src="{{ asset('js/Chart.bundle.min.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    var ctx1 = document.getElementById("myChart1").getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'line',
        data: {
            labels: [   ],
            datasets: [{
                label: '',
                borderColor : "rgba(151,187,205,1)",
                data: [  ],
          },
          {
      			label :'',
      			borderColor : "rgba(151,100,205,1)",
      			data : [    ]
      		}

        ]
        },
        options : {
          elements : {
            rectangle : {
              borderWidth : 1,
              borderColor : "rgb(0,255,0)",
              borderSkipped : 'bottom'
            }
          },
          responsive : true,
          title : {
            display : true
          }
        }
    });
  </script> -->
@endsection
