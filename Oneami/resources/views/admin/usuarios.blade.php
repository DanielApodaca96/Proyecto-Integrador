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

@section('usuarios')
<div class="row">
  <div class="title" style="text-align: center; padding-top:110px;">Usuarios</div>
  <div class="subtitle" style="text-align: center">Consulta, agrega y elimina.</div>
</div>
<button type="button" class="btnagregar navbar-right btnCirculo" data-toggle="modal" data-target=".usuarios">
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
                  <!-- <th>#</th> -->
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Privilegios</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                @forelse($usuarios as $usu)
                  <tr>
                    <!-- <th>{{ $usu->id }}</th> -->
                    <th>{{ $usu->name }}</th>
                    <th>{{ $usu->email }}</th>
                    <th>{{ $usu->privilegios }}</th>
                    <th>
                      <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btn btnedit"
                      data-id="{{ $usu->id }}"
                      data-name="{{  $usu->name  }}"
                      data-email="{{  $usu->email  }}"
                      data-privilegios="{{  $usu->privilegios  }}"
                      >
                        <i class="glyphicon glyphicon-pencil"></i>
                      </button>
                    </th>
                    <th>
                        <button class="btn" type="button"  data-toggle="modal" data-target=".eliminar{{ $usu->id }}">
                          <i class="glyphicon glyphicon-trash"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade eliminar{{ $usu->id }}" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Eliminando registro: {{ $usu->name }}</h4>
                              </div>
                              <div class="modal-body">
                                <p>Estas seguro/a de que deseas eliminar este registro?</p>
                              </div>
                              <div class="modal-footer">

                                <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                                {!!  Form::open(array( 'route'=>['admin.usuarios.destroy', $usu->id], 'method'=>'delete' ))  !!}
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
      @if(count($usuarios)>=1)
          {!!  Form::open(array('route'=>['admin.usuarios.edit', $usu->id], 'method'=>'GET' ))  !!}
            <div class="modal-body">

              <input type="hidden" name="id" id="idEditar" value="">

              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nameEditar" id="nameEditar" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Correo electronico</label>
                <input type="text" name="nameEmail" id="nameEmail" value="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Privilegios</label>
                <select class="form-control" name="editarPrivilegios" id="editarPrivilegios">
                  <option value="Administrador">Administrador</option>
                  <option value="Editor">Editor</option>
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
<div class="modal fade usuarios" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega un usuario nuevo.</h4>
      </div>
      <div class="modal-body">
        <div class="card-body">

          {{ Form::open (array('url'=>'/administracion/usuarios','files'=>"true") )}}
          <fieldset>
            <div class="form-group">
              <label for="">Nombre</label>
                  {{ Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre')  )}}

            </div>
            <div class="form-group">
              <label for="">Correo</label>
                  {{ Form::email('correo','',array('class'=>'form-control','placeholder'=>'Correo')  )}}
            </div>
            <div class="form-group">
              <label for="">Contraseña</label>
                  {{ Form::password('contrasena1',array('class'=>'form-control','placeholder'=>'Contraseña')  )}}
            </div>
            <div class="form-group">
              <label for="">Contraseña</label>
                  {{ Form::password('contrasena2',array('class'=>'form-control','placeholder'=>'Confirma contraseña')  )}}
            </div>
            <div class="form-group">
              <label for="">Privilegios</label><br>
              {{  Form::select('privilegios',[
              'Administrador' => 'Administrador',
              'Editor' => 'Editor'],null,['class'=>'form-control']  )}}
            </div>
            <div class="form-group">
                {{ Form::submit('Aceptar',array('class'=>'btn btn-primary')  )}}
            </div>
          </fieldset>
          {{ Form::close() }}

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
        var nom=$(this).data('name');
        var id = $(this).data('id');
        var email = $(this).data('email');
        var priv = $(this).data('privilegios');

        //var em=$(this).data('email');
        $("#idEditar").val(id);
        $('#nameEditar').val(nom);
        $('#nameEmail').val(email);
        $('#editarPrivilegios').val(priv);
        $("#nomModal").text(nom);

      });
    });
  </script>
@endsection
