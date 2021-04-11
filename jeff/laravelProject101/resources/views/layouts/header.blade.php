<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Título</title>
    </head>
    <body>
        <h1>Título con layouts Laravel 2021</h1>
        @yield('contenido')
    </body>
</html>