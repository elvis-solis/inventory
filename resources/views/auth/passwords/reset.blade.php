@extends('layouts.app')

@section('content')
<!-- Extiende la plantilla de diseño 'layouts.app' -->

<div class="container">
    <!-- Contenedor principal -->
    <div class="row">
        <!-- Fila -->
        <div class="col-md-8 col-md-offset-2">
            <!-- Columna -->
            <div class="panel panel-default">
                <!-- Panel predeterminado -->
                <div class="panel-heading">Reset Password</div>
                <!-- Encabezado del panel -->

                <div class="panel-body">
                    <!-- Cuerpo del panel -->
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        <!-- Formulario para restablecer la contraseña -->
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- Campo oculto para el token -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                                <!-- Campo de entrada para la dirección de correo electrónico -->

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <!-- Mostrar mensaje de error si existe -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <!-- Campo de entrada para la contraseña -->

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <!-- Mostrar mensaje de error si existe -->
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <!-- Campo de entrada para confirmar la contraseña -->

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                <!-- Mostrar mensaje de error si existe -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <!-- Botón para restablecer la contraseña -->
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
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
