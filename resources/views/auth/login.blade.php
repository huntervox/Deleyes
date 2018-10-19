@extends('layouts.login')
@section('content')
    <h1>Deleyes Login</h1>
    <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>Ingrese un correo y una contraseña. </span>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <input id="email" type="text" class="form-control-solid placeholder-no-fix form-group form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                    name="email" value="{{ old('email') }}" required autofocus autocomplete="off" placeholder="Correo">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif 
            </div>
                                
            <div class="col-xs-6">
                <input id="password" type="password" class="form-control-solid placeholder-no-fix form-group form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                    name="password" autocomplete="off" placeholder="Contraseña" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                                     
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="rem-password">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">                                        
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordar datos') }}
                        </label>
                        <span></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-8 text-right">
                <button class="btn green" type="submit">Ingresar</button>
            </a>
            </div>
            <br>
            <div class="col-sm-8 text-right">
                <a href="{{ route('register') }}" class="font-blue-dark">
                    Registrarse
                </a>
            </div>
            
        </div>
    </form>
@endsection