@extends('layouts.layout')
@section('titulo','Crear Usuario')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1 m12 s12">
            <div class="row">
                <div class="col l9 m9 s12">
                    <div class="card-panel">
                        <div class="row">
                            {!! Form::open(['route'=>'user.store','method'=>'POST','class'=>'col s12','files'=>true]) !!}
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-user prefix"></i>
                                    <input id="nombre" type="text" class="validate" name="nombre" required>
                                    <label for="nombre">Nombre del cliente</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="fa fa-user-plus prefix"></i>
                                    <input id="apellido" type="text" class="validate" name="apellido" required>
                                    <label for="apellido">Apellido del cliente</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-phone prefix"></i>
                                    <input id="cel" type="tel" class="validate" name="cel" maxlength="9" required>
                                    <label for="cel">Celular del cliente</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="fa fa-location-arrow prefix"></i>
                                    <input id="dir" type="text" class="validate" name="dir" required>
                                    <label for="dir">Direccion del cliente</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-users prefix"></i>
                                    <input id="fam" type="text" class="validate" name="fam" required>
                                    <label for="fam">Familia del cliente</label>
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
                <div class="col l3 m3 s12">
                    <div class="card-panel">
                        <span class="card-title">Lista de Usuarios</span>
                            <li><a href="#">fsdf</a></li>
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