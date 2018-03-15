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
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <button type="submit" class="navbar-right" name="btnborrar">
                    <i class="glyphicon glyphicon-trash"></i>
                  </button>
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                      Grupo La Gaviota #701
                    </a>
                  </h4>

                </div>
                <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
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
                        @forelse($alumnos as $alu)
                        <tr>
                          <th>{{ $alu->id_persona }}</th>
                          <th>{{ $alu-> nombre }}</th>
                          <th>{{ $alu->apellidoP }}</th>
                          <th>{{ $alu->apellidoM }}</th>
                          <th>{{ $alu->edad }}</th>
                          <th>{{ $alu->sexo }}</th>
                          <th>{{ $alu->telefono }}</th>
                          <th>{{ $alu->estado_civil }}</th>
                          <th>{{ $alu->escolaridad }}</th>
                          <th>

                              <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btnedit"
                              data-nombre="{{$alu->nombre}}">
                                <i class="glyphicon glyphicon-pencil"></i>
                              </button>

                          </th>
                          <th><form class="" action="#" method="post">
                            <button type="submit" name="btnborrar">
                              <i class="glyphicon glyphicon-trash"></i>
                            </button>
                          </form> </th>
                        </tr>
                        @empty
                          <p>Sin Registros</p>
                        @endforelse
                      </tbody>
                      </table>
                      <a type="submit" name="btnborrar" data-toggle="modal" data-target=".alumno">
                        <i class="glyphicon glyphicon-plus">Agregar alumno</i>
                      </a>
                  </div>
                </div>
              </div>
              </div>
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="modal fade editar" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Editar a: <b>Daniel</b>.</h4>
        </div>
          {!!  Form::open(array('url'=>'/administracion/alumnos')  )!!}
        <div class="modal-body">
          <div class="input-group">
            <label for="">Nombre</label>
            <input type="text" name="nameEditar" id="nameEditar "value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Apellido P</label>
            <input type="text" name="nameApellidoP" id="nameApellidoP "value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Apellido M</label>
            <input type="text" name="nameApellidoM" id="nameApellidoM "value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Edad</label>
            <input type="text" name="nameEdad" id="nameEdad "value="" class="form-control">
          </div>
          <div class="input-group">
            <label for="">Telefono</label>
            <input type="text" name="nameTelefono" id="nameTelefono "value="" class="form-control">
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
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Editar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




@endsection
<div class="modal fade alumno" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega un alumno nuevo.</h4>
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
              {{  Form::select('sexo',array('sexo'=>'Masculino','Femenino')  )}}
            </div>
            <div class="form-group">
              <label for="">Estado Civil</label><br>
              {{  Form::select('estado_civil',array('estado'=>'Soltero/a','Casado/a','Divorciado/a','Viudo/a')  )}}
            </div>
            <div class="form-group">
              <label for="">Escolaridad</label><br>
              {{  Form::select('escolaridad',array('esco'=>'Primaria','Secundaria','Media Superior','Superior')  )}}
            </div>
              {{  Form::submit('Aceptar',array('class'=>'btn btn-primary')  )}}
          </fieldset>
          {{  Form::close()  }}
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@section('jQuery')
  <script type="text/javascript">
    $(document).ready(function(){
      $(".btnedit").on("click", function(){
        var nom=$(this).data('nombre');
        //var em=$(this).data('email');
        $('#nameEditar').val(nom);

      });
    });
  </script>
@endsection
