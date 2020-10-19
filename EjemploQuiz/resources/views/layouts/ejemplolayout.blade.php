<html>

<head>
    <title>Nombre de la app - @yield('titulo')</title>
</head>

<body>
    @section('barralateral')
    Esto es la barra locale_get_primary_language
    @show

    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>