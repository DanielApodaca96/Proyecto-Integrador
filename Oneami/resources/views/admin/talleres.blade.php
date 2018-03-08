@extends('admin.plantilla')
@extends('includes.navAdmin')
  @section('talleres')
  <div class="row">
    <div class="title" style="text-align: center; padding-top:110px;">Talleres</div>
    <div class="subtitle" style="text-align: center">Informacion acerca de todos nuestros talleres</div>
  </div>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div>
    <div class="row">
      <div class="table col-md-10 col-sm-10 col-lg-10" style="padding-left:80px; padding-right:80px;">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Instructor</th>
              <th>Descripcion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
              <th><form class="" action="#" method="post">
                <button type="submit" name="btnimprimir">
                  <i class="glyphicon glyphicon-print"></i>
                </button>
              </form> </th>
              <th><form class="" action="#" method="post">
                <button type="submit" name="btneditar">
                  <i class="glyphicon glyphicon-pencil"></i>
                </button>
              </form> </th>
              <th><form class="" action="#" method="post">
                <button type="submit" name="btnborrar">
                  <i class="glyphicon glyphicon-trash"></i>
                </button>
              </form> </th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
            <tr>
              <th>1</th>
              <th>Educacion Sexual</th>
              <th>Daniel Apodaca</th>
              <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <form class="navbar-right" method="post">
      <a type="submit" data-toggle="modal" data-target=".taller">
        <i class="glyphicon glyphicon-plus">Agregar taller</i>
      </a>
    </form>
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
          @if($errors->any())
            <div class="alert alert-warning alert-dismissable">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          @if(session()->has('mensaje'))
            <div class="alert alert-success">
              {{ session()->get('mensaje') }}
            </div>
          @endif
          {{ Form::open (array('url'=>'/administracion/talleres')) }}
          <fieldset>
            <div class="form-group">
              <label for="">Nombre</label>
                {{ Form::text('nombre','',array('class'=>'form-control','placeholder'=>'Nombre')  )}}

            </div>
            <div class="form-group">
              <label for="">Instructor</label>
              {{ Form::text('Instructor','',array('class'=>'form-control','placeholder'=>'Instructor'))}}

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
