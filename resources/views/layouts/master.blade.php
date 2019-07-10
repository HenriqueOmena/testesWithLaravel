<!DOCTYPE html>
<html>
    <head>
        <title>Treinando - @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
        @stack('css')
    </head>
    <header>
        @yield('header')
    </header>
    <body>
        @yield('content')
    </body>

    <script src="/js/app.js"></script>
    @stack('js')
</html>
