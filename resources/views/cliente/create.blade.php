@extends('layouts.layout')
@section('titulo','Crear Usuario')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1 m12 s12">
            <div class="row">
                <div class="col l9 m9 s12">
                    <div class="card-panel hoverable">
                        <div class="row">
                            @include('layouts.errors')
                            {!! Form::open(['route'=>'cliente.store','method'=>'POST','class'=>'col s12']) !!}
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
                                    <input id="celular" type="tel" class="validate" name="celular" maxlength="9" required>
                                    <label for="celular">Celular del cliente</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="fa fa-location-arrow prefix"></i>
                                    <input id="direccion" type="text" class="validate" name="direccion" required>
                                    <label for="direccion">Direccion del cliente</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-users prefix"></i>
                                    <input id="familia" type="text" class="validate" name="familia" required>
                                    <label for="familia">Familia del cliente</label>
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
                    <div class="card-panel hoverable">
                        <span class="card-title">Lista de Clientes</span>
                        @foreach($clientes as $cliente)
                            <li><a href="#">{{$cliente}}</a></li>
                        @endforeach
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