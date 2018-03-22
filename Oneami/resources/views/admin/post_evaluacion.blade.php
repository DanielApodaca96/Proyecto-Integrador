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
    <div class="title" style="text-align: center; padding-top:110px;">Post-evaluación</div>
    <div class="subtitle" style="text-align: center">Nombre del pelado seleccionado</div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="form-group preguntas">
        @forelse($post as $pr)
        <label for="">{{ $pr->id_pregunta.".-" }}&nbsp; </label><label for="">{{ $pr->pregunta }}</label>
        <div class="from-group">
          {{ Form::radio($pr->id_pregunta, 100,false,['class' => 'field']) }}
          <label for="100">100</label><br>
          {{ Form::radio( $pr->id_pregunta, 75,false,['class' => 'field']) }}
          <label for="100">75</label><br>
          {{ Form::radio( $pr->id_pregunta , 50,false,['class' => 'field']) }}
          <label for="100">50</label><br>
          {{ Form::radio( $pr->id_pregunta , 25,false,['class' => 'field']) }}
          <label for="100">25</label><br>
          {{ Form::radio( $pr->id_pregunta , 0,false,['class' => 'field']) }}
          <label for="100">0</label><br>

        </div>
        @empty
          <p>Sin registros</p>
        @endforelse
      </div>
    </div>
  </div>
@endsection
