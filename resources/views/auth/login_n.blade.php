@extends('layouts.app') // Extiende el diseño de la aplicación desde el archivo 'layouts.app'. Esto significa que heredará la
estructura y estilos definidos en ese archivo.

@section('content')
    // Define una sección llamada 'content' que se puede llenar en otras partes del código.
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div> // Título del panel de inicio de sesión.

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}"> // Formulario para el
                            inicio de sesión. Los datos se enviarán al método 'login' de la ruta definida en la función
                            'route'.

                            {{ csrf_field() }} // Genera un campo oculto con un token CSRF para proteger el formulario
                            contra ataques CSRF.

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> // Verifica si hay
                                errores en el campo de correo electrónico y agrega la clase 'has-error' si es así.
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label> // Etiqueta para
                                el campo de correo electrónico.

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ old('email') }}" required autofocus> // Campo de entrada para el correo
                                    electrónico. El valor se establece en el valor antiguo del campo (si existe).

                                    @if ($errors->has('email'))
                                        // Comprueba si hay errores en el campo de correo electrónico.
                                        <span class="help-block"> // Muestra un mensaje de error.
                                            <strong>{{ $errors->first('email') }}</strong> // Muestra el primer error del
                                            campo de correo electrónico.
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> // Verifica si hay
                                errores en el campo de contraseña y agrega la clase 'has-error' si es así.
                                <label for="password" class="col-md-4 control-label">Password</label> // Etiqueta para el
                                campo de contraseña.

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required> //
                                    Campo de entrada para la contraseña.

                                    @if ($errors->has('password'))
                                        // Comprueba si hay errores en el campo de contraseña.
                                        <span class="help-block"> // Muestra un mensaje de error.
                                            <strong>{{ $errors->first('password') }}</strong> // Muestra el primer error del
                                            campo de contraseña.
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Remember Me // Campo de selección para recordar el inicio de sesión.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary"> // Botón para enviar el formulario.
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}"> // Enlace para
                                        restablecer la contraseña.
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
@endsection // Finaliza la sección 'content'.
