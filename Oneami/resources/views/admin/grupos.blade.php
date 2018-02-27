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
                      </tbody>
                      </table>
                      <button type="submit" name="btnborrar">
                        <i class="glyphicon glyphicon-plus">Agregar Alumno Nuevo</i>
                      </button>
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

@endsection
