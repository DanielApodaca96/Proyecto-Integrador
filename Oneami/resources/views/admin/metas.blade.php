@extends('admin.plantilla')
@extends('includes.navAdmin')
@section('metas')
<div class="row">
  <div class="title" style="text-align: center; padding-top:110px;">Metas</div>
  <div class="subtitle" style="text-align: center">Estamos comprometidos a completar nuestras metas</div>
</div>

<div class="btn-group col-md-4 col-md-offfset-4 col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4">
  <button type="button" class="btn btn-default dropdown-toggle combo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Periodos <span class="caret"></span>
  </button>
  <ul class="dropdown-menu menu">
    <li><a href="#">Enero-Abril</a></li>
    <li><a href="#">Mayo-Agosto</a></li>
    <li><a href="#">Septiembre-Diciembre</a></li>
  </ul>
</div>
<div class="col-md-4 col-md-offset-4">
    <canvas class="loader3" width="400" height="400"></canvas>
</div>
<div class="col-md-12">
  <h4 style="text-align:center;">Porcentaje de alumnos registrados en este prediodo.</h4>
</div>









@endsection
@section('script-porcentajes')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.classyloader.js') }}"></script>
<script src="{{ asset('js/porcentajes.js') }}"></script>
@endsection
