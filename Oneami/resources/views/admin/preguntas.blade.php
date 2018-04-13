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

@section('preguntas')
<div class="row">
  <div class="title" style="text-align: center; padding-top:110px;">Preguntas</div>
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
<button type="button" class="btnagregar navbar-right" data-toggle="modal" data-target=".preguntas" style="margin-top: 325px;">
    <i class="glyphicon glyphicon-plus"></i>
</button>
<button type="button" class="btnagregar navbar-right" data-toggle="modal" data-target=".categorias" style="margin-top:270px;">
    <i class="glyphicon glyphicon-list"></i>
</button>

<div class="row">
  <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:80px; padding-right:80px;">
    <table class="table table-striped">
      <tbody>
        <tr>
          <th>
            @foreach($categorias as $cate)
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">

                    <button class="navbar-right btn btnedit" type="button"  data-toggle="modal" data-target=".eliminar{{ $cate->id_categoria }}">
                      <i class="glyphicon glyphicon-trash"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade eliminar{{ $cate->id_categoria }}" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Eliminando la categoría: {{ $cate->nombre }}</h4>
                          </div>
                          <div class="modal-body">
                            <i class="glyphicon glyphicon-exclamation-sign deleteWarning"></i>
                            <p class="">¿Estás seguro/a de que deseas eliminar esta categoría de forma permanente junto con todo su contenido?</p>
                          </div>
                          <div class="modal-footer">

                            <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                                {!!  Form::open(array( 'route'=>['admin.categorias.destroy', $cate->id_categoria], 'method'=>'delete' ))  !!}
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              <button type="submit" name="btnborrar" class="btn btn-danger">Eliminar</button>
                                {!!  Form::close()  !!}

                          </div>
                        </div>
                      </div>
                    </div>

                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{  $cate->id_categoria  }}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                        {{  $cate->nombre  }}
                      </a>
                    </h4>

                  </div>
                  <div id="collapse{{  $cate->id_categoria  }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" expanded="false">
                    <div class="panel-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Pregunta</th>
                            <th>Tipo de respuesta</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse($categorias2 as $pre)
                          <tr>
                            @if($pre->id_categoria==$cate->id_categoria)
                            <th>{{ $pre->id_pregunta }}</th>
                            <th>{{ $pre->pregunta }}</th>
                            <th>{{ $pre->tipo_respuesta }}</th>
                            <th>
                              <button type="button" name="btneditar" data-toggle="modal" data-target=".editar" class="btn btnedit"
                              data-id="{{ $pre->id_pregunta }}"
                              data-pregunta="{{  $pre->pregunta  }}"
                              data-tipo_respuesta="{{  $pre->tipo_respuesta  }}"
                              >
                                <i class="glyphicon glyphicon-pencil"></i>
                              </button>
                            </th>
                            <th>
                              <button class="btn" type="button" data-toggle="modal" data-target=".eliminar2{{ $pre->id_pregunta }}">
                                <i class="glyphicon glyphicon-trash"></i>
                              </button>

                              <!-- Modal -->
                              <div class="modal fade eliminar2{{ $pre->id_pregunta }}" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Eliminando pregunta #{{ $pre->id_pregunta }}</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>¿Estás seguro/a de que deseas eliminar esta pregunta?</p>
                                    </div>
                                    <div class="modal-footer">

                                      <!--{!!  Form::open(array( 'route'=>['admin.usuarios.store','post'] ))  !!}-->
                                      {!!  Form::open(array( 'route'=>['admin.preguntas.destroy', $pre->id_pregunta], 'method'=>'delete' ))  !!}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" name="btnborrar" class="btn btn-danger">Eliminar</button>
                                      {!!  Form::close()  !!}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </th>
                            @endif
                          </tr>
                          @empty
                            <p>Sin registros</p>
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
<div class="row">



</div>

@endsection

<div class="modal fade preguntas" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega una pregunta nueva.</h4>
      </div>

      <div class="modal-body">
        {{ Form::open (array('url'=>'administracion/preguntas')) }}
      <fieldset>
        <div class="form-group">
          <label for="">Pregunta</label>
          {{ Form::text('pregunta','',array('class'=>'form-control','placeholder'=>'Pregunta')) }}
        </div>
        <div class="form-group">
          <label for="">Tipo de respuesta</label><br>
          {{  Form::select('tipo_respuesta',[
          '4 Opciones' => '4 Opciones',
          '2 Opciones' => '2 Opciones']  )}}
        </div>
        <div class="form-group">
          <label>Categoría</label><br>
          <select class="cate" name="id_categoria">
            @forelse($categorias as $cate)
              <option value="{{$cate->id_categoria}}">{{ $cate->nombre }}</option>
            @empty
              <option value=""></option>
            @endforelse
          </select>
        </div>
        <div class="form-group">
          {{ Form::submit('Aceptar', array('class'=>'btn btn-primary')) }}
        </div>
      </fieldset>
       {{ Form::close() }}
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--************************************EDITAR PREGUNTAS*************************************-->
<div class="modal fade editar" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega una pregunta nueva.</h4>
      </div>

      <div class="modal-body">
        {!!  Form::open(array('route'=>['admin.preguntas.edit', $pre->id_pregunta], 'method'=>'GET' ))  !!}
          <div class="modal-body">
            <input type="hidden" name="id" id="idEditar" value="">
            <div class="input-group">
              <label for="">Pregunta</label>
              <input type="text" name="nameEditar" id="nameEditar" value="" class="form-control">
            </div>
            <div class="input-group">
              <label for="">Tipo de pregunta</label><br>
              <select class="form-control" name="editarTipo" id="editarTipo">
                <option value="4 Opciones">4 Opciones</option>
                <option value="2 Opciones">2 Opciones</option>
              </select>
          </div>
      </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dagner" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
        {!! Form::close() !!}
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade categorias" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title txtcenter-sans" id="gridSystemModalLabel">Agrega una categoria nueva.</h4>
      </div>
      <div class="modal-body">
        {{ Form::open (array('url'=>'administracion/categorias')) }}
      <fieldset>
        <div class="form-group">
          <label for="">Nombre</label>
          {{ Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Categoria')) }}
        </div>
        <div class="form-group">
          {{ Form::submit('Aceptar', array('class'=>'btn btn-primary')) }}
        </div>
      </fieldset>

       {{ Form::close() }}
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
        var pre=$(this).data('pregunta');
        var id = $(this).data('id');
        var tipo=$(this).data('tipo_respuesta');
        //var em=$(this).data('email');
        $("#idEditar").val(id);
        $('#nameEditar').val(pre);
        $('#editarCategoria').val(tipo);
        $("#nomModal").text(pre);

      });
    });
  </script>
@endsection
