    @if($errors->any())
      <div class="conf alert alert-warning alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">x</a>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if(session()->has('mensaje'))
      <div class="conf alert alert-success alert-dismissible fade in" data-backdrop="static">
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
  </div>

  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar alumno...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div>
  <div class="row">
    <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:80px; padding-right:80px;">
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>
              @foreach($grupos as $g)
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">

                  <button class="navbar-right btn btnedit" type="button"  data-toggle="modal" data-target=".eliminar{{ $g->id_grupo }}">
                    <i class="glyphicon glyphicon-trash"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade eliminar{{ $g->id_grupo }}" role="dialog">
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

                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="submit" name="btnborrar" class="btn btn-danger">Eliminar</button>

                        </div>
                      </div>
                    </div>
                  </div>

                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{  $g->id_grupo  }}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                      {{  $g->nom_grupo . " #" . $g->num_grupo  }}
                    </a>
                  </h4>
                </div>
                <div id="collapse{{  $g->id_grupo  }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" expanded="false">
                  <div class="panel-body" style="">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Apellido P.</th>
                          <th>Apellido M.</th>
                          <th>Edad</th>
                          <th>Sexo</th>
                          <th>Telefono</th>
                          <th>Estado Civil</th>
                          <th>Escolaridad</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($grupos2 as $alu)
                        <tr>
                          @if($alu->id_grupo==$g->id_grupo)
                          <th>{{ $alu->id_persona }}</th>
                          <th>{{ $alu->nombre }}</th>
                          <th>{{ $alu->apellidoP }}</th>
                          <th>{{ $alu->apellidoM }}</th>
                          <th>{{ $alu->edad }}</th>
                          <th>{{ $alu->sexo }}</th>
                          <th>{{ $alu->telefono }}</th>
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
                            <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btn btnedit btn-success">
                              <i class="glyphicon glyphicon-chevron-left"></i>
                            </button>
                          </th>
                          <th>
                            <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btn btnedit btn-success">
                              <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
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
  <button type="button" class="btnagregar navbar-right" data-toggle="modal" data-target=".grupos">
      <i class="glyphicon glyphicon-plus"></i>
  </button>

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
                  {{ Form::submit('Aceptar',array('class'=>'btn btn-primary')  )}}
              </div>
            </fieldset>

            {{ Form::close() }}
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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
            {!!  Form::open(array('route'=>['admin.alumnos.edit', $alu->id_persona], 'method'=>'GET' ))  !!}
              <div class="modal-body">

                <input type="hidden" name="id" id="idEditar" value="">

                <div class="input-group">
                  <label for="">Nombre</label>
                  <input type="text" name="nameEditar" id="nameEditar" value="" class="form-control">
                </div>
                <div class="input-group">
                  <label for="">Apellido P</label>
                  <input type="text" name="nameApellidoP" id="nameApellidoP" value="" class="form-control">
                </div>
                <div class="input-group">
                  <label for="">Apellido M</label>
                  <input type="text" name="nameApellidoM" id="nameApellidoM" value="" class="form-control">
                </div>
                <div class="input-group">
                  <label for="">Edad</label>
                  <input type="text" name="nameEdad" id="nameEdad" value="" class="form-control">
                </div>
                <div class="input-group">
                  <label for="">Telefono</label>
                  <input type="text" name="nameTelefono" id="nameTelefono" value="" class="form-control">
                </div>
                <div class="input-group">
                  <label for="">Sexo</label>
                  <select class="form-control" name="editarSexo" id="editarSexo">

                  </select>
                </div>
                <div class="input-group">
                  <label for="">Estado civil</label>
                  <select class="form-control" name="editarEstado" id="editarEstado">

                  </select>
                </div>
                <div class="input-group">
                  <label for="">Escolaridad</label>
                  <select class="form-control" name="editarEscolaridad" id="editarEscolaridad">

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
        $('#nameEditar').val(nom);
        $('#nameApellidoP').val(ap);
        $('#nameApellidoM').val(am);
        $('#nameEdad').val(edad);
        $('#nameTelefono').val(telefono);
        $('#editarSexo').val(sexo);
        $('#editarEstado').val(estado);
        $('#editarEscolaridad').val(escolaridad);
        $("#nomModal").text(nom);

      });
      $('.btninscripcion').on("click", function(){
        var nom2=$(this).data('id');
        $('#nameEditar').val(nom2);

      });

    });
  </script>
@endsection
