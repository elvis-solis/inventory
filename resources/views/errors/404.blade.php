<!DOCTYPE html>
<html lang="en"> <!-- Definición del idioma del documento (inglés). -->
<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres del documento como UTF-8. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista y escala inicial del documento. -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Especifica la versión de Internet Explorer compatible con el documento. -->
    <title>Document</title> <!-- Título del documento. -->
</head>
<body>
    <h1 style="text-align:center">Opps Something Went Wrong <br> <!-- Título principal que indica que algo salió mal. -->
         Or You Don't Have Permission to Access This Page <!-- Mensaje que indica que no tienes permiso para acceder a esta página. -->
    <a href="{{ url('/') }}">Go To Home page</a> <!-- Enlace para ir a la página de inicio. -->
    </h1>
</body>
</html>
