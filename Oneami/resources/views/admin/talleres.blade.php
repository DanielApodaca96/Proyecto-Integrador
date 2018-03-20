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

@section('talleres')
  <div class="row">
    <div class="title" style="text-align: center; padding-top:110px;">Talleres</div>
    <div class="subtitle" style="text-align: center">Informacion acerca de todos nuestros talleres</div>
  </div>
  <div class="row">

    <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:80px; padding-right:80px;">

      <table class="table table-striped">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar taller...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div><!-- /input-group -->
        </div>

        <tbody>
          <tr>
            <th>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Instructor</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($talleres as $taller)
                  <tr>
                    <th>{{ $taller->id_taller }}</th>
                    <th>{{ $taller->nombre_taller }}</th>
                    <th>{{ $taller->descripcion }}</th>
                    <th>{{ $taller->instructor }}</th>
                    <th>
                      <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btn btnedit"
                      data-id="{{  $taller->id_taller  }}"
                      data-nom="{{  $taller->nombre_taller  }}"
                      data-desc="{{  $taller->descripcion  }}"
                      data-inst="{{  $taller->instructor  }}">
                        <i class="glyphicon glyphicon-pencil"></i>
                      </button>
                    </th>
                    <th>
                        <button class="btn" type="submit" name="btnborrar"  data-toggle="modal" data-target=".eliminar{{ $taller->id_taller }}">
                          <i class="glyphicon glyphicon-trash"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade eliminar{{ $taller->id_taller }}" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Eliminando registro: {{ $taller->nombre_taller }}</h4>
                              </div>
                              <div class="modal-body">
                                <p>Estas seguro/a de que deseas eliminar este registro?</p>
                              </div>
                              <div class="modal-footer">

                                <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                                {!!  Form::open(array( 'route'=>['admin.talleres.destroy', $taller->id_taller], 'method'=>'delete' ))  !!}
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <button type="submit" name="btnborrar" class="btn btn-danger">Eliminar</button>
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
                <a type="submit" name="btnborrar" data-toggle="modal" data-target=".taller">
                  <i class="glyphicon glyphicon-plus">Agregar taller</i>
                </a>
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
          <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Editar a: <b id="nomModal">Daniel</b>.</h4>
        </div>
            {!!  Form::open(array('route'=>['admin.talleres.edit', $taller->id_taller], 'method'=>'GET' ))  !!}
        <div class="modal-body">

          <input type="hidden" name="id" id="idEditar" value="">

          <div class="input-group">
            <label for="">Nombre del taller</label>
            <input type="text" name="nameEditar" id="nameEditar" value="" class="form-control">
          </div>

          <div class="input-group">
            <label for="">Instructor</label>
            <input type="text" name="nameInstructor" id="nameInstructor" value="" class="form-control">
          </div>

          <div class="input-group">
            <label for="">Descripción</label>
            <input type="text" name="nameDescripcion" id="nameDescripcion" value="" class="form-control">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dagner" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Editar</button>
        </div>
        {!! Form::close() !!}
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->

@endsection
<div class="modal fade taller" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega una pregunta nueva.</h4>
      </div>
      <div class="modal-body">
        <div class="card-body">
          {{ Form::open (array('url'=>'/administracion/talleres')) }}
          <fieldset>
            <div class="form-group">
              <label for="">Nombre</label>
                {{ Form::text('nombre_taller','',array('class'=>'form-control','placeholder'=>'Nombre')  )}}

            </div>
            <div class="form-group">
              <label for="">Instructor</label>
              {{ Form::text('instructor','',array('class'=>'form-control','placeholder'=>'Instructor'))}}

            </div>
            <div class="form-group">
              <label for="">Descripción</label>
              {{ Form::text('descripcion','',array('class'=>'form-control','placeholder'=>'Descripción'))}}

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

@section('jQuery')
  <script type="text/javascript">
    $(document).ready(function(){
      $(".btnedit").on("click", function(){
        var nom=$(this).data('nom');
        var id = $(this).data('id');
        var desc = $(this).data('desc');
        var inst = $(this).data('inst');

        //var em=$(this).data('email');
        $("#idEditar").val(id);
        $('#nameEditar').val(nom);
        $('#nameDescripcion').val(desc);
        $('#nameInstructor').val(inst);
        $("#nomModal").text(nom);

      });
    });
  </script>
@endsection
