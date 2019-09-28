@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="header header-primary text-center">
                        <h4 class="card-title">INGRESAR</h4>
                        <div class="social-line">
                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#pablo" class="btn btn-just-icon btn-simple">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                    </div>
                     {{-- <p class="description text-center">Or Be Classical</p> --}}
                    <div class="card-content">

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">face</i>
                            </span>
                            <input id="cedula" type="number" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" name="cedula" value="{{ old('cedula') }}" required autofocus placeholder="Cédula de identidad">

                            @if ($errors->has('cedula'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cedula') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña / Clave">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                Recuérdame
                            </label>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-simple btn-wd btn-lg">ENVIAR</button>
                    </div>
                </form>
                @if (Route::has('password.request'))
                    <a class="btn btn-primary btn-xs btn-block" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection