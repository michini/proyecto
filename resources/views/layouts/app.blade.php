<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    <title>Fotos y Filmaciones A1</title>

    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body>
    @yield('content')

    <!-- JavaScripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.0.9/scrollreveal.min.js"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
    <script>
        window.sr = ScrollReveal();
        sr.reveal('.card');
        sr.reveal('.card-panel');
    </script>
    @yield('scripts')
</body>
</html>
