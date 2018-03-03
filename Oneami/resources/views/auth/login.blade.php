@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="logindiv col-md-4 col-md-offset-4">
            <div class="card">
                <div class="card-header inicia-sesion">Login</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row col-md-10 col-md-offset-1 ">
                            <label for="email" class="">E-Mail Address</label>

                            <div class="input-group input-group-lg">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <span class="input-group-addon input-style" id="sizing-addon1">
                                  <i class="glyphicon glyphicon-user"></i>
                                </span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row col-md-10 col-md-offset-1 ">
                            <label for="password" class="">Password</label>

                            <div class="input-group input-group-lg">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="input-group-addon input-style" id="sizing-addon1">
                                  <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="">
                                <button type="submit" id="boton" class="btn btn-default btn-lg col-md-10 col-md-offset-1 btn1">
                                    Login
                                </button>

                                <a class="diva" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
