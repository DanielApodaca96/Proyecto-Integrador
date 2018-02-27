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
@endsection
