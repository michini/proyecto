<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
</head>
<body>
<div class="container">
    <div class="row" style="padding-top:5em;;">
        <div class="col l6 offset-l3">
            <div class="card">
                <div class="card-image">
                    <img src="http://www.lorempixel.com/500/200" alt="">
                </div>
                <div class="card-content">
                    <h1>Acceso no autorizado</h1>
                </div>
                <div class="card-action">
                    <a href="{{url('/login')}}">Iniciar sesion</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>