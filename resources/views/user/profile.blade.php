@extends('layouts.layout')
@section('titulo','Perfil')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l12 m12 s12">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset('img')."/".Auth::user()->photo}}" alt="">
                            <span class="card-title flow-text">{{Auth::user()->username}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var input = $('#pass');
        function agregar(){
            input.attr("value","123456");
        }

        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection