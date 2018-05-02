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
@section('metas')
<div class="row">
  <div class="title" style="text-align: center; padding-top:110px;">Metas</div>
  <div class="subtitle" style="text-align: center">Estamos comprometidos a completar nuestras metas</div>
</div>

<div class="row">
  <!-- <div class="btn-group col-md-2 col-md-offset-4" >
    <select class="metas form-control" name="meses">
      <option value="4">Enero - Abril</option>
      <option value="8">Mayo - Agosto</option>
      <option value="12">Septiembre - Diciembre</option>
    </select>
  </div> -->
  <div class="btn-group col-md-4 col-md-offset-4" >
    <select id="metas" class="metas form-control" name="anio">

      <option value="2018">2018</option>
      <option value="2019">2019</option>
    </select>
  </div>

  <button type="meta"class="metas" name="meta" data-toggle="modal" data-target="#myModal">
    <i class="glyphicon glyphicon-cog"></i>
  </button>

</div>

<div class="container">
  <div class="row">
    <div class="col-md-3 graph">
      <h4 class="titleGraphs">ENERO - ABRIL</h4>
        <canvas class="loader1" width="400" height="400"></canvas>
    </div>
    <div class="col-md-3 graph">
      <h4 class="titleGraphs">MAYO - AGOSTO</h4>
      <canvas class="loader2" width="400" height="400"></canvas>
    </div>
    <div class="col-md-3 graph">
      <h4 class="titleGraphs">SEPTIEMBRE - DICIEMBRE</h4>
      <canvas class="loader3" width="400" height="400"></canvas>
    </div>
  </div>
</div>

<div class="col-md-12">
  <h4 style="text-align:center;">Porcentaje de alumnos registrados en este periodo.</h4>
</div>


<!-- Modal Evaluacion-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Establezca la meta de alumnos por año.</h4>
      </div>
      <div class="modal-body">

      <h5>Cantidad de alumnos por año</h5>
      {{  Form::open(array('url'=>'/administracion/metas')  )}}
      <input type="text" name="metas" value="">
      <button type="submit" class="contestar btn btn-success">OK</button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      {{ Form::close()}}
    </div>
  </div>
</div>

@endsection
@section('script-porcentajes')
<script src="{{ asset('js/jquery.classyloader.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function (){
    console.log({!! $metas !!});
  });

$('.loader1').ClassyLoader({
    percentage: ({!!$contados1!!}*100)/({!! $metas !!}/3),
    speed: 20,
    fontFamily: 'Georgia',
    fontColor: 'rgba(0,0,0,0.4)',
    lineColor: 'rgba(255,0,0,0.4)',
    lineWidth: 3,
    remainingLineColor: 'rgba(0,0,0,0.1)'
});

$('.loader2').ClassyLoader({
    percentage: ({!!$contados2!!}*100)/({!! $metas !!}/3),
    speed: 20,
    fontFamily: 'Georgia',
    fontColor: 'rgba(0,0,0,0.4)',
    lineColor: 'rgba(255,0,0,0.4)',
    lineWidth: 3,
    remainingLineColor: 'rgba(0,0,0,0.1)'
});

$('.loader3').ClassyLoader({
    percentage: ({!!$contados3!!}*100)/({!! $metas !!}/3),
    speed: 20,
    fontFamily: 'Georgia',
    fontColor: 'rgba(0,0,0,0.4)',
    lineColor: 'rgba(255,0,0,0.4)',
    lineWidth: 3,
    remainingLineColor: 'rgba(0,0,0,0.1)'
});
</script>

<!-- <script src="{{ asset('js/porcentajes.js') }}"></script> -->
@endsection
