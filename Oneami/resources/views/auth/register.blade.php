@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="logindiv posicion col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">

            <div class="card">
                <div class="card-header row inicia-sesion">Regístrate</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="">Nombre</label><br>

                            <div class="">
                                <input placeholder="Nombre" id="name" type="text" class="input-style form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="">Correo electrónico</label><br>

                            <div class="">
                                <input placeholder="Correo electrónico" id="email" type="email" class="input-style form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="">Contraseña</label><br>

                            <div class="">
                                <input placeholder="Contraseña" id="password" type="password" class="input-style form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="">Confirmar contraseña</label><br>

                            <div class="">
                                <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="input-style form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="">
                                <button  id="boton" type="submit" class="btn btn-default btn-lg col-md-12 col-xs-12 btn1" style="margin-top: 30px;">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
