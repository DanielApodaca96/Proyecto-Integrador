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
                    Sexualidad humana
                  </a>
                </h4>

              </div>
              <div id="collapse2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Pregunta</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <th>La educación entre iguales tiene en cuenta la importancia de las relaciones interpersonales del grupo.</th>
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
                    </tbody>
                    </table>


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
<form class="navbar-right" method="post">
  <a type="submit" data-toggle="modal" data-target=".preguntas">
    <i class="glyphicon glyphicon-plus">Agregar Pregunta</i>
  </a>
</form>
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
          <label for="disabledSelect">Categoria</label>
          {{ Form::select('categoria',array('taller'=>
          'TECNICAS DE COMUNICACIÓN',
          'CONOCIMIENTO DE LAS ETAPAS DE DESARROLLO DEL NIÑO',
          'VIOLENCIA FAMILIAR',
          'BAJA AUTOESTIMA / ESTRÉS',
          'EQUIDAD DE GENERO',
          'TIEMPO EFECTIVO EN LA FAMILIA',
          'ESTABLECIMIENTO DE LIMITES',
          'DESNUTRICION',
          'SEXUALIDAD',
          'ADICCIONES'
          ), array('id'=>'disabledSelect','class'=>'form-control','placeholder'=>'Talleres')) }}
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
