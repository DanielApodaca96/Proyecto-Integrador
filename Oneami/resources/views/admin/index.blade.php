
@extends('admin.plantilla')
@extends('includes.navAdmin')

@section('Titulo')
  {{ $title }}
@endsection

@section('contenido')
<div class="row">
  <div class="title" style="text-align: center; padding-top:110px;">Inicio</div>
  <div class="subtitle" style="text-align: center;padding-bottom:5px;">Bienvenido al panel de administración.</div>
</div>
<div class="row">
  <div class="col-md-3 bg-color-red inicio">
    <h4 class="titulo-inicio">Total personas registradas</h4>
    <span class="titulo-inicio titulo-number">655</span>
  </div>
  <div class="col-md-3 bg-color-green inicio">
    <h4 class="titulo-inicio">Total grupos abiertos</h4>
    <span class="titulo-inicio titulo-number">25</span>
  </div>
  <div class="col-md-3 bg-color-blue inicio">
    <h4 class="titulo-inicio">Total de talleres</h4>
    <span class="titulo-inicio titulo-number">15</span>
  </div>
</div>
  <div class="row">
    <!--------------------------------- CHART.JS -------------------------->
    <div id="canvas-container" class="col-md-6">
        <canvas id="chart"></canvas>
      </div>
    </div>
  </div>
@endsection



@section('scripts')
    <script src="{{ asset('js/Chart.bundle.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){

    	var datos = {
    		labels : ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
    		datasets : [{
    			label : "datos 1",
    			borderColor : "rgba(220,220,220,1)",
    			data : [4, 12, 9, 7, 5]
    		},
    		{
    			label : "datos 2",
    			borderColor : "rgba(151,187,205,1)",
    			data : [10,7,-5,6,5]
    		},
    		{
    			label : "datos 3",
    			borderColor : "rgba(151,100,205,1)",
    			data : [9,6,15,6,17]
    		}
    		]
    	};

    	var canvas = document.getElementById('chart').getContext('2d');
    	window.bar = new Chart(canvas, {
    		type : "line",
    		data : datos,
    		options : {
    			elements : {
    				rectangle : {
    					borderWidth : 1,
    					borderColor : "rgb(0,255,0)",
    					borderSkipped : 'bottom'
    				}
    			},
    			responsive : true,
    			title : {
    				display : true,
    				text : "Prueba de grafico de barras"
    			}
    		}
    	});

    	setInterval(function(){
    		var newData = [
    			[getRandom(),getRandom(),getRandom(),getRandom()*-1,getRandom()],
    			[getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
    			[getRandom(),getRandom(),getRandom(),getRandom(),getRandom()],
    		];

    		$.each(datos.datasets, function(i, dataset){
    			dataset.data = newData[i];
    		});
    		window.bar.update();
    	}, 5000);




    	function getRandom(){
    		return Math.round(Math.random() * 100);
    	}


    });
    </script>
@endsection
