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

<div class="row">

  <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:80px; padding-right:80px;">

    <table class="table table-striped">
      <div class="col-lg-4 col-lg-offset-4">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar usuarios...">
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
                  <th>Correo</th>
                  <th>Privilegios</th>
                </tr>
              </thead>
              <tbody>
                @forelse($usuarios as $usu)
                  <tr>
                    <th>{{ $usu->id }}</th>
                    <th>{{ $usu->name }}</th>
                    <th>{{ $usu->email }}</th>
                    <th>{{ $usu->privilegios }}</th>

                    <th>
                      <form class="" action="#" method="post">
                        <button type="submit" name="btnimprimir">
                          <i class="glyphicon glyphicon-print"></i>
                        </button>
                      </form>
                    </th>
                    <th>
                      <form class="" action="#" method="post">
                        <button type="submit" name="btneditar">
                          <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                      </form>
                    </th>
                    <th>
                      <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                      {!!  Form::open(array( 'route'=>['admin.usuarios.destroy', $usu->id], 'method'=>'delete' ))  !!}
                        <button type="submit" name="btnborrar">
                          <i class="glyphicon glyphicon-trash"></i>
                        </button>
                      {!!  Form::close()  !!}
                    </th>
                  </tr>
                @empty
                  <p>Sin Registros</p>
                @endforelse
              </tbody>
              </table>
              <a type="submit" name="btnborrar" data-toggle="modal" data-target=".usuarios">
                <i class="glyphicon glyphicon-plus">Agregar usuario</i>
              </a>
          </th>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
<div class="modal fade usuarios" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega una pregunta nueva.</h4>
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
              <label for="disabledSelect">Privilegios</label>
              {{ Form::select('privilegios',array('admin'=>'Administrador','Editor'),array('class'=>'form-control','placeholder'=>'Privilegios')  )}}
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
