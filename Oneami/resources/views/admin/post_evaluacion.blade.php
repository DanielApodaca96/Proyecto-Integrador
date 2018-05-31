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

@section('pre')
  <div class="row">
    <div class="title" style="text-align: center; padding-top:110px;">Evaluaciones</div>
    <h4 class="titleGraphs">Mejoria entre el PRE y POST</h4>
  </div>
  <div class="row">
    <div class="col-md-12">
      <canvas id="myChart1" width="200" height="550"></canvas>
    </div>
  </div>
  <input type="hidden" name="" value="{{ csrf_token() }}" id="token">
@endsection
@section('graficasScript')
</script>
<script src="{{ asset('js/Chart.bundle.min.js') }}" type="text/javascript"></script>

<!-- <script type="text/javascript">
$(document).ready(function(){
    var per=$(this).data('id');
    console.log(per);
    $.ajax({
      url:'/administracion/post_evaluacion/ajaxGrafica',
      method:'POST',
      data:{
        nombre: per,
        _token: $('#token').val()
      }
    }).done(function(res){
      var arr=res.split('#');
      console.log(arr);


    });
});
</script> -->

<script type="text/javascript">
$(document).ready(function(){
  var ctx1 = document.getElementById("myChart1").getContext('2d');
  ctx1.canvas.width = 500;
  var myChart1 = new Chart(ctx1, {
      type: 'line',
      data: {
          labels: [  {!! $resultados1 !!}  ],
          datasets: [{
              label: 'Pre-Evaluacion',
              borderColor : "rgba(151,187,205,1)",
              data: [  {!!  $valores1  !!}  ],
        },
        {
          label :'Post-Evaluacion',
          borderColor : "rgba(151,100,205,1)",
          data : [  {!!  $valores2  !!}  ]
        }

      ]
      },
      options : {
        elements : {
          rectangle : {
            borderWidth : 1,
            borderColor : "rgb(0,255,0)",
            borderSkipped : 'bottom'
          }
        },
        responsive : true,
        maintainAspectRatio: false,
        title : {
          display : true
        }
      }
  });
});


</script>
@endsection
