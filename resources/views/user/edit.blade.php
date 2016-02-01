@extends('layouts.layout')
@section('titulo','Editar Usuario')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l12 m12 s12">
                    <div class="card-panel">
                        <div class="row">
                            {!! Form::open(['route'=>'user.store','method'=>'POST','class'=>'col s12','files'=>true]) !!}
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-user prefix"></i>
                                    <input id="username" type="text" class="validate" name="username" required>
                                    <label for="username">Nombre de usuario</label>
                                </div>
                                <div class="file-field input-field col s6">
                                    <div class="btn">
                                        <span>Foto</span>
                                        <input type="file" name="photo">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" id="photo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-envelope prefix"></i>
                                    {!! Form::email('email',null,['class'=>'validate','required','id'=>'email']) !!}
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field col s6">
                                    <select name="rol[]" required multiple id="rol">
                                        <option disabled selected>Elige el Rol</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-panel">
                                    <div class="btn" id="gen" onclick="agregar($('#pass').val())">
                                        Generar Contraseña
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-key prefix"></i>
                                    {!! Form::text('password',null,['class'=>'validate','id'=>'pass','placeholder'=>'contraseña','required']) !!}
                                    <label for="pass" data-error="error">Contraseña</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m4">
                                    {!! Form::submit('Guardar',['class'=>'btn waves-effect']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
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