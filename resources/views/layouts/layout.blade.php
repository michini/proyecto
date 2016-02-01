<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
      @yield('css')
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>@yield('titulo')</title>
    </head>

    <body>

    <!--header inicio -->
    @include('layouts.sidebar')
    <!--header final -->

    <!--div container inicio -->
    <div class="container">
      <div class="row">
        <div class="col l11 offset-l1 m12 s12">
          @include('flash::message')
        </div>
      </div>
        @yield('contenido')
    </div>
    <!--div container final -->

      <script type="text/javascript" src="{{asset('plugins/fullcalendar2/lib/jquery.min.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.0.9/scrollreveal.min.js"></script>
      <script src="{{asset('js/materialize.js')}}"></script>
      @yield('scripts')
  	  <script type="text/javascript">
        $(document).ready(function(){
          $('.collapsible').collapsible({
            accordion : true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
          });
        });
        $('.button-collapse').sideNav({
              menuWidth: 260, // Default is 240
              edge: 'left', // Choose the horizontal origin
              closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
          );
        $(document).ready(function(){
          var btn = $("#close");
          btn.click(function(){
            $('#alert').fadeOut();
          });
        });
        window.sr = ScrollReveal();
        sr.reveal('.card');
        sr.reveal('.card-panel');
  	  </script>
    </body>
  </html>