@extends('layouts.layout')
@section('titulo','Prueba')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            {!! Form::open(['route'=>'postSelect','method'=>'POST']) !!}
            <div class="input-field col s12">
                <select name="select">
                    <option disabled selected>Elige el Rol</option>
                    @foreach($data as $rol)
                        <option value="{{$rol->name}}">{{$rol->name}}</option>
                    @endforeach
                </select>
                <label>Materialize Select</label>
            </div>
            {!! Form::submit('Enviar',['class'=>'btn waves-effect']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection