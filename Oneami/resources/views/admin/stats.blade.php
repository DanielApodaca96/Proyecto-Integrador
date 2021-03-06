
@extends('admin.plantilla')
@extends('includes.navAdmin')

@section('Titulo')

@endsection

@section('contenido')
<div class="row">
  <div class="title" style="text-align: center; padding-top:110px;">Estadísticas</div>
  <div class="subtitle" style="text-align: center;padding-bottom:5px;">Gráficas con datos generales.</div>
</div>
<div class="row">
  <div class="col-md-3 bg-color-red inicio">
    <h4 class="titulo-inicio">Total personas registradas</h4>
    <span class="titulo-inicio titulo-number count">{{ $TotalPersonas }}</span>
  </div>
  <div class="col-md-3 bg-color-green inicio">
    <h4 class="titulo-inicio">Total grupos abiertos</h4>
    <span class="titulo-inicio titulo-number count">{{ $TotalGrupos }}</span>
  </div>
  <div class="col-md-3 bg-color-blue inicio">
    <h4 class="titulo-inicio">Total de talleres</h4>
    <span class="titulo-inicio titulo-number count">{{ $TotalTalleres }}</span>
  </div>
</div>

  <div class="row">
    <div class="col-md-3 graph">
      <h4 class="titleGraphs">Cantidad de hombres y mujeres</h4>
      <canvas id="myChart1" width="400" height="400"></canvas>
    </div>
    <div class="col-md-3 graph">
      <h4 class="titleGraphs">Estados civiles</h4>
      <canvas id="myChart2" width="400" height="400"></canvas>
    </div>
    <div class="col-md-3 graph">
      <h4 class="titleGraphs">Escolaridad</h4>
      <canvas id="myChart3" width="400" height="400"></canvas>
    </div>
  </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/Chart.bundle.min.js') }}" type="text/javascript"></script>
    <script>
      var ctx1 = document.getElementById("myChart1").getContext('2d');
      var ctx2 = document.getElementById("myChart2").getContext('2d');
      var ctx3 = document.getElementById("myChart3").getContext('2d');
      var n1={!! $TotalPersonas !!};
      var myChart1 = new Chart(ctx1, {
          type: 'bar',
          data: {
              labels: [  {!!  $sexo  !!}  ],
              datasets: [{
                  label: '{{  $nombreGrafica  }}',
                  data: [  {!!  $valores1  !!}  ],
                  backgroundColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
      var myChart2 = new Chart(ctx2, {
          type: 'doughnut',
          data: {
              labels: [  {!!  $estado_civil  !!}  ],
              datasets: [{
                  label: '{{  $nombreGrafica  }}',
                  data: [  {!!  $valores2  !!}  ],
                  backgroundColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
      var myChart3 = new Chart(ctx3, {
          type: 'doughnut',
          data: {
              labels: [  {!!  $escolaridad  !!}  ],
              datasets: [{
                  label: '{{  $nombreGrafica  }}',
                  data: [  {!!  $valores3  !!}  ],
                  backgroundColor: [
                      'rgba(255, 99, 132, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
//////////////////////////////////////////////////////////////////////////////
    $('.count').each(function () {
  $(this).prop('Counter',0).animate({
        Counter: parseInt($(this).text())
    }, {
        duration: 1000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
    </script>
@endsection
