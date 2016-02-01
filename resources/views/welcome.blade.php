@extends('layouts.app')
@section('content')
    <div id="inicio" class="navbar-fixed scrollspy">
        @include('layouts.navbar')
    </div><!-- inicio navbar -->
    <div><!-- fin navbar -->
        <div class="slider"><!-- inicio slider -->
            <ul class="slides">
                <li>
                    <img src="{{asset('slider/s1.jpg')}}"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="{{asset('slider/s2.jpg')}}"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="{{asset('slider/s3.jpg')}}"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>Right Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="{{asset('slider/bg4.jpg')}}"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div><!-- fin navbar -->
    </div>
    <div class="row">
                <div class="col l4 m4 s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('slider/matri.jpg')}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Matrimonios<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Mas</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Matrimonios<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col l4 m4 s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('slider/quino.jpg')}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Quince-años<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Mas</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
                <div class="col l4 m4 s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="{{asset('slider/gradu.jpg')}}">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Graduaciones<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Mas</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        </div>
                    </div>
                </div>
    </div><!-- Rows -->
    <div id="nosotros" class="row section scrollspy">
        <div class="card">
            <div class="col l7">
                <div class="card-content">
                    <span class="card-title">Sobre Nosotros</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, exercitationem officiis.
                        Atque consequuntur corporis cupiditate dolorem ducimus expedita ipsum maxime molestias mollitia
                        nesciunt nihil nostrum odit officia qui, quisquam reiciendis.
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsumha
                        sido el texto derelleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.
                        persona quese dedica a la imprenta)desconocido usó una galería de textos y los mezcló de tal manera
                        que logró hacer un libro de
                        textos
                    </p>
                </div>
            </div>
            <div class="col l5">
                <div class="card-image">
                    <img src="{{asset('slider/equipo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div><!-- Nosotros -->
    <div class="row">
        <div class="">

        </div>
    </div>
    <div class="parallax-container" style="height: 440px;">
        <div class="parallax">
            <span class="card-title">fsdfdf</span>
            <img src="{{asset('slider/parallax.jpg')}}">
        </div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">Parallax</h2>
            <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.slider').slider({full_width: true,height:555,indicators:true});
        });
        $(document).ready(function(){
            $('.parallax').parallax();
        });
        sr.reveal('.section');
        sr.reveal('.parallax-container');
        $(document).ready(function(){
            $('.scrollspy').scrollSpy();
        });
        $(".button-collapse").sideNav();
    </script>
@endsection
