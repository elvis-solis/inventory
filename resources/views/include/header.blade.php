<!-- Favicon-->
<meta charset="UTF-8"> <!-- Configura la codificación de caracteres del documento como UTF-8. -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge"> <!-- Configura la versión de Internet Explorer compatible con el documento. -->
<meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Configura el token CSRF para proteger el formulario contra ataques CSRF. -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> <!-- Configura la vista y escala inicial del documento para dispositivos móviles. -->
<link rel="icon" href="{{ url('images/favicon.png') }}" type="image/x-icon"> <!-- Configura el icono del sitio web. -->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> <!-- Incluye la fuente de Google "Roboto" en el documento. -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> <!-- Incluye los iconos de Material Design de Google en el documento. -->

<!-- Bootstrap Core Css -->
<link href="{{ url('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"> <!-- Incluye el archivo CSS principal de Bootstrap. -->

<!-- Waves Effect Css -->
<link href="{{ url('plugins/node-waves/waves.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para los efectos de ondas en los elementos. -->

<!-- Animation Css -->
<link href="{{ url('plugins/animate-css/animate.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para las animaciones en los elementos. -->

<!-- Morris Chart Css-->
<link href="{{ url('plugins/morrisjs/morris.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para los gráficos de Morris. -->

<!-- Custom Css -->
<link href="{{ url('css/style.css') }}" rel="stylesheet"> <!-- Incluye el archivo CSS personalizado "style.css". -->

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="{{ url('css/themes/theme-teal.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para el tema "theme-teal". -->

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"> <!-- Incluye el archivo CSS para las notificaciones de Toastr. -->

<!-- Bootstrap Material Datetime Picker Css -->
<link href="{{ url('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para el selector de fecha y hora de Bootstrap Material Datetime Picker. -->

<!-- Bootstrap DatePicker Css -->
<link href="{{ url('plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para el selector de fecha de Bootstrap. -->

<!-- Wait Me Css -->
<link href="{{ url('plugins/waitme/waitMe.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para los indicadores de espera. -->

<!-- Bootstrap Select Css -->
<!--  <link href="{{ url('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />   --> <!-- Incluye el archivo CSS para el selector personalizado de Bootstrap. -->

<link href="{{ url('css/select2.min.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para el selector personalizado Select2. -->
<link href="{{ url('css/vue-multiselect.min.css') }}" rel="stylesheet" /> <!-- Incluye el archivo CSS para el selector personalizado Vue-Multiselect. -->
