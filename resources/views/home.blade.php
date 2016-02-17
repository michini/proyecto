@extends('layouts.layout')

@section('titulo','Inicio')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/fullcalendar2/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/fullcalendar2/fullcalendar.print.css')}}" media="print">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@endsection
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l4 m4 s4">
                    <div class="card-panel center red-text text-lighten-1 omar">
                        <i class="fa fa-user large"> {{$clientes}}</i>
                        <hr>
                        <p><h3>Clientes</h3></p>
                    </div>
                </div>
                <div class="col l4 m4 s4">
                    <div class="card-panel center red-text text-lighten-1 omar">
                        <i class="fa fa-video-camera large"> {{$eventos}}</i>
                        <hr>
                        <h3>Eventos</h3>
                    </div>
                </div>
                <div class="col l4 m4 s4">
                    <div class="card-panel center red-text text-lighten-1 omar">
                        <i class="fa fa-users large"> {{$filmadores}}</i>
                        <hr>
                        <p><h3>Filmadores</h3></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l8 m12 s12">
                    <div class="card-panel hoverable">
                        <div id="calendar"></div>
                    </div>
                </div>
                <div class="col l4 m12">
                    <div class="card-panel hoverable">
                        <span><h5>Eventos Próximos:</h5></span>
                        <hr>
                        @foreach($event as $evento)
                            <div class="card-panel teal white-text">
                                <b>Lugar: </b><span>{{$evento->lugar}}</span><br>
                                <b>Fecha: </b><span>{{$evento->fecha}}</span><br>
                                <a href="{{route('evento.show',$evento->id)}}" class="right yellow-text text-accent-4">Mas info</a>
                            </div>
                        @endforeach
                            <a href="{{route('evento.index')}}" class="center btn red">Ver Todos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio dialog -->
    <div id="modal" title="Info del Evento" class="modal">
        <div class="modal-content">
            <b>Lugar: </b><span id="modalTitle"></span><br>
            <b>Fecha: </b><span id="modalBody"></span><br>
            <b>Descripcion:</b>
            <p id="modalDescription"></p>
        </div>
        <div class="modal-footer">
            <a id="link" href="#!" class="white-text modal-action modal-close waves-effect waves-light btn">Mas</a>
        </div>
    </div>
    <!-- Fin dialog -->
@endsection
@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{asset('plugins/fullcalendar2/lib/moment.min.js')}}"></script>
    <script src="{{asset('plugins/fullcalendar2/fullcalendar.js')}}"></script>
    <script src="{{asset('plugins/fullcalendar2/lang-all.js')}}"></script>
    <script>
        $(document).ready(function() {

            var currentLangCode = 'es';

            $('#calendar').fullCalendar({
                eventRender: function (event, element) {
                    element.attr('href', 'javascript:void(0);');
                    element.click(function() {
                        $('#modalTitle').html(event.title);
                        $('#modalBody').html(moment(event.start).format('Do MMMM h:mm A'));
                        $('#modalDescription').html(event.description);
                        $("#link").attr('href', event.url);
                        $('#modal').dialog({
                            modal:true,
                            width:350
                        });
                    });
                },

                customButtons: {
                    print: {
                        text: 'Imprimir',
                        click: function() {
                            javascript:window.print();
                        }
                    }
                },
                header: {
                    left: 'prev,next today print',
                    center: 'title',
                    right: 'month'
                },

                lang:currentLangCode,
                //editable: true,
                eventLimit: true, // allow "more" link when too many events
                events:{
                    url:'http://localhost/proyectos/tesis/public/api'
                }
            });

            $('.omar').on({
                'mouseover':function(){$(this).addClass('teal lighten-5 hoverable');},
                'mouseout':function(){$(this).removeClass('teal lighten-5 hoverable');}
            });

        });

    </script>
@endsection
