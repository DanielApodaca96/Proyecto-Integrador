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
@section('alumnos')

  <div class="row">
    <div class="title" style="text-align: center; padding-top:110px;">Alumnos</div>
    <div class="subtitle" style="text-align: center">Consulta, agrega y elimina.</div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
      <div class="input-group">
        <input type="search" class="form-control" id="txtBusqueda" placeholder="Buscar alumno...">
        <input type="hidden" name="" value="{{ csrf_token() }}" id="token">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div>
  <button type="button" class="btnagregar navbar-right btnCirculo" data-toggle="modal" data-target=".alumno">
      <i class="glyphicon glyphicon-plus"></i>
  </button>
  <div class="row">
    <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:80px; padding-right:80px;">
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>
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
                <tbody id="tbody">
                  @forelse($alumnos as $alu)
                  <tr>
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
                      <button type="button" name="btninscripcion" data-toggle="modal" data-target=".inscripcion" class="btn btn-success btninscripcion" data-id="{{  $alu->id_persona  }}">
                        Inscribir
                      </button>
                    </th>
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
                              <h4 class="modal-title">Eliminando registro: {{ $alu->nombre }}</h4>
                            </div>
                            <div class="modal-body">
                              <p>¿Estás seguro/a de que deseas eliminar este registro?</p>
                            </div>
                            <div class="modal-footer">

                              <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                              {!!  Form::open(array( 'route'=>['admin.alumnos.destroy', $alu->id_persona], 'method'=>'delete' ))  !!}
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" name="btnborrar" class="btn btn-danger btnAjax btnEliminar" data-dismiss="modal">Eliminar</button>
                              {!!  Form::close()  !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </th>
                  </tr>
                  @empty
                    <p>Sin Registros</p>
                  @endforelse
                </tbody>
                </table>
                <!-- <a type="submit" name="btnborrar" data-toggle="modal" data-target=".alumno">
                  <i class="glyphicon glyphicon-plus">Agregar alumno</i>
                </a> -->

            </th>
          </tr>
        </tbody>
      </table>
      <!-------------------------------------------->
    </div>
  </div>

  {!!  Form::open(array( 'url'=>['/administracion/alumnos/ajax'], 'method'=>'POST','id'=>'miForm' ))  !!}
    <input type="hidden" name="id_persona"  id="idForm">
  {!!  Form::close()  !!}

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
                  <input type="text" name="nameNombre" id="nameNombre" value="" class="form-control">
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
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
                <div class="input-group">
                  <label for="">Estado civil</label>
                  <select class="form-control" name="editarEstado" id="editarEstado">
                    <option value="Soltero/a">Soltero/a</option>
                    <option value="Casado/a">Casado/a</option>
                    <option value="Divorciado/a">Divorciado/a</option>
                    <option value="Viudo/a">Viudo/a</option>
                  </select>
                </div>
                <div class="input-group">
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

  </div><!-- /.modal -->




@endsection
<div class="modal fade alumno" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega un alumno nuevo.</h4><br>
      </div>
      <div class="modal-body">
        <div class="card-body">
          {{  Form::open(array('url'=>'/administracion/alumnos')  )}}
          <fieldset>
            <div class="form-group">
              <label for="">Nombre</label>
              {{  Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre')  )}}
            </div>
            <div class="form-group">
              <label for="">Apellido Paterno</label>
              {{  Form::text('apellidoP','',array('class'=>'form-control','placeholder'=>'Apellido Paterno')  )}}
            </div>
            <div class="form-group">
              <label for="">Apellido Materno</label>
              {{  Form::text('apellidoM','',array('class'=>'form-control','placeholder'=>'Apellido Materno')  )}}
            </div>
            <div class="form-group">
              <label for="">Edad</label>
              {{  Form::text('edad','',array('class'=>'form-control','placeholder'=>'Edad')  )}}
            </div>
            <div class="form-group">
              <label for="">Teléfono</label>
              {{  Form::text('telefono','',array('class'=>'form-control','placeholder'=>'Teléfono')  )}}
            </div>
            <div class="form-group">
              <label for="">Sexo</label><br>
              {{  Form::select('sexo',[
              'Masculino' => 'Masculino',
              'Femenino' => 'Femenino']  )}}
            </div>
            <div class="form-group">
              <label for="">Estado Civil</label><br>
              {{  Form::select('estado_civil', [
              'Soltero/a' => 'Soltero/a',
              'Casado/a' => 'Casado/a',
              'Divorciado/a' => 'Divorciado/a',
              'Viudo/a' => 'Viudo/a']  )}}
            </div>
            <div class="form-group">
              <label for="">Escolaridad</label><br>
              {{  Form::select('escolaridad', [
              'Primaria' => 'Primaria',
              'Secundaria' => 'Secundaria',
              'Media Superior' => 'Media Superior',
              'Superior' => 'Superior']  )}}
            </div>
          </fieldset>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{  Form::close()  }}

<div class="modal fade inscripcion" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Inscribe a un grupo.</h4><br>
      </div>
      <div class="modal-body">
        <div class="card-body">
          {{  Form::open(array('url'=>'/administracion/inscripcion')  )}}
          <fieldset>
            <div class="form-group">
              <input type="hidden" name="nameEditar" id="nameEditar" value="">
            </div>
            <div class="form-group">
              <label for="">Grupo</label><br>
              <select class="grupo" name="id_grupo" id="comboAjax">
                @forelse($grupos as $g)
                  <option value="{{ $g->id_grupo }}">{{ $g->nom_grupo }} {{ $g->num_grupo }}</option>
                @empty
                  <option value=""></option>
                @endforelse
              </select>
             <div class="form-group">
               <label for="">Fecha</label><br>
                  <div class="input-group date tiempo">
                    {{ Form::text('tiempo','',array('class'=>'form-control','placeholder'=>'Fecha')  )}}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  </div>
            </div>
            </div>
              {{  Form::submit('Aceptar',array('class'=>'btn btn-primary')  )}}
          </fieldset>
          {{  Form::close()  }}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnCloseModal" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@section('jQuery')
  <script type="text/javascript">

    var formulario;
    var tr;

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
        $('#nameTelefono').val(telefono);
        $('#nameSexo').val(sexo);
        $('#nameEstado').val(estado);
        $('#editarEscolaridad').val(escolaridad);
        $("#nomModal").text(nom);

      });
      $('.btninscripcion').on("click", function(){
        var nom2=$(this).data('id');
        $('#nameEditar').val(nom2);
        $('#idForm').val(nom2);
        $.ajax({
          method:'POST',
          url:'/administracion/alumnos/ajax',
          data: $('#miForm').serialize(),
        }).done(function (respuesta){
          $('#comboAjax').find('option').remove();
          console.log(respuesta);
          $('#comboAjax').append(respuesta);
        });

      });

      //Evento para el input
      $('#txtBusqueda').on('keyup', function(){
        $.ajax({
          method: 'POST',
          url: '/administracion/alumnos/buscar',
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
            var todo="<tr><th>" + arreglo[x].id_persona + "</th><th>" + arreglo[x].nombre + "</th><th>" + arreglo[x].apellidoP +
            "</th><th>" + arreglo[x].apellidoM + "</th><th>" + arreglo[x].edad + "</th><th>" + arreglo[x].sexo + "</th><th>" +
            arreglo[x].telefono + "</th><th>" + arreglo[x].estado_civil + "</th><th>" + arreglo[x].escolaridad + "</th>";
            todo+='<th><button type="" name="" data-toggle="modal" data-target=".inscripcion" class="btn btn-success btninscripcion" data-id="">Inscribir</button></th>';
            todo+='<th><button type="" name="" data-toggle="modal" data-target=".editar" class="btn btnedit" data-nombre="'+arreglo[x].nombre+'" data-id="'+arreglo[x].id_persona+'" data-ap="'+arreglo[x].apellidoP+'" data-am="'+arreglo[x].apellidoM+'" data-edad="'+arreglo[x].edad+'" data-sexo="'+arreglo[x].sexo+'" data-telefono="'+arreglo[x].telefono+'" data-estado="'+arreglo[x].estado_civil+'" data-escolaridad="'+arreglo[x].escolaridad+'"><i class="glyphicon glyphicon-pencil"></i></button></th>';
            todo+='<th><button class="btn" type="button"  data-toggle="modal" data-target=".eliminar'+arreglo[x].id_persona+'"><i class="glyphicon glyphicon-trash"></i></button>';
            todo+='<div class="modal fade eliminar' + arreglo[x].id_persona + '" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Eliminando registro: '+ arreglo[x].nombre +'</h4></div><div class="modal-body"><p>¿Estás seguro/a de que deseas eliminar este registro?</p></div><div class="modal-footer"><form method="post" action="/administracion/alumnos'+arreglo[x].id_persona+'"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="_method" value="delete"><button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button><button type="button" name="btnborrar" class="btn btn-danger btnAjax btnEliminar" data-dismiss="modal">Eliminar</button></form></div></div></div></div></th>';
            $("#tbody").append(todo);
          }
          console.log(arreglo);
        })

      });

      //Eliminar con ajax
      $('.btnEliminar').on('click', function(event){
        event.preventDefault();
        tr = $(this).parent('form').parent('div').parent('div').parent('div').parent('div').parent('th').parent('tr');
        formulario = $(this).parent('form');
      });

      $('.btnAjax').on('click', function(){
        $.ajax({
          method: 'delete',
          url: formulario.attr('action'),
          data: formulario.serialize()
        }).done(function(){
          tr.fadeOut(600);
        })
      });

    });
  </script>
@endsection
@section('fecha')
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
$('.tiempo').datepicker({
    format: "dd/mm/yyyy"
});

</script>
@endsection
