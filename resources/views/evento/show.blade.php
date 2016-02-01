@extends('layouts.layout')
@section('titulo')
    Evento | {{$evento->lugar}}
@endsection
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l12 m12 s12">
                    <div class="card large">
                        <div class="card-image">
                            <img src="http://lorempixel.com/500/150/animals" alt="">
                            <span class="card-title flow-text">Evento</span>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col l6">
                                    <span><b>Identificador: </b></span>{{$evento->id}}<br>
                                    <span><b>Fecha y hora: </b></span>{{$evento->fecha}}<br>
                                    <span><b>Lugar: </b></span>{{$evento->lugar}}<br>
                                    <span><b>Descripcion: </b></span>{{$evento->descripcion}}
                                </div>
                                <div class="col l6">
                                    <span><b>Estado: </b></span>{{$evento->estado}}<br>
                                    <span><b>Paquete: </b></span>{{$evento->paquete->tipo}}<br>
                                    <span><b>Compromiso: </b></span>{{$evento->compromiso->nombre}}<br>
                                    <span><b>Filmadores: </b></span><br>
                                    @foreach($evento->filmadores as $filmador)
                                        - {{$filmador->nombre}}<br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="{{url('/home')}}" class="btn waves-effect waves-light center"><i class="fa fa-arrow-left"></i> volver</a>
                            <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                                <a class="btn-floating btn-large red">
                                    <i class="large material-icons">mode_edit</i>
                                </a>
                                <ul>
                                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection