<!DOCTYPE html>
<html>

<head>

    <title>@yield('title','Inventory')</title> <!-- Define el título de la página y utiliza un valor por defecto si no se proporciona. -->

    @include('include.header') <!-- Incluye el contenido del archivo 'include.header'. -->
    <style>
        .select2 {

            width: 100% !important; /* Estilo CSS personalizado para el selector select2. */
        }
    </style>
</head>

<body class="theme-teal" onload="loaded()">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por favor espera...</p> <!-- Mensaje que se muestra durante la carga de la página. -->
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ url('/') }}" title=""><img class="img-fluid" src="{{ url('images/logo.png') }}" alt=" logo" style="height: 40px;"></a> <!-- Logo del sitio web. -->
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>

        @include('include.sidebar') <!-- Incluye el contenido del archivo 'include.sidebar'. -->

        <section class="content">
            <div id="inventory" class="container-fluid">
                <div class="block-header">
                    <h2>@yield('page-title')</h2> <!-- Título de la página que se muestra en el contenido. -->
                </div>

                <!-- Widgets -->

                @yield('content') <!-- Contenido de la página que se puede llenar en otras partes del código. -->

            </div>
        </section>

        @include('include.footer') <!-- Incluye el contenido del archivo 'include.footer'. -->

        <script type="text/javascript">
            var base_url = "{{ url('/').'/' }}"; // Variable que contiene la URL base del sitio web.
        </script>

        <script type="text/javascript">
            function loaded() {
                var segment3 = '{{ Request::segment(1) }}'; // Obtiene el tercer segmento de la URL actual.
                var current_url = base_url + segment3; // URL completa de la página actual.
                $('a[href="' + current_url + '"]').parents('.ml-menu').siblings('a').addClass('toggled'); // Agrega la clase 'toggled' al elemento padre del enlace actual en el menú.
                $('a[href="' + current_url + '"]').parents('.ml-menu').css('display', 'block'); // Muestra el menú desplegable del enlace actual.
            }
        </script>

        @stack('script') <!-- Incluye el contenido del stack 'script'. -->

</body>

</html>
