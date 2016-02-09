@extends('layouts.layout')
@section('titulo','Eventos')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l12">
                    <div class="card-panel">
                        @foreach($eventos as $evento)
                            <div class="card teal white-text">
                                <li>{{$evento->fecha}}</li>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection