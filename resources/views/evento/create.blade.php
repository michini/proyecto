@extends('layouts.layout')
@section('titulo','Crear Evento')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/datetimepicker/jquery.datetimepicker.css')}}">
@endsection
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1 m12 s12">
            <div class="row">
                <div class="col l9 m9 s12">
                    <div id="print" class="card-panel hoverable print">
                        <div class="row">
                            @include('layouts.errors')
                            {!! Form::open(['route'=>'evento.store','method'=>'POST','class'=>'col s12']) !!}
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-user prefix"></i>
                                    <input id="lugar" type="text" class="validate" name="lugar" required>
                                    <label for="lugar">Lugar del Evento</label>
                                </div>
                                <div class="col l6">
                                    <div class="input-field">
                                        <select name="paquete">
                                            <option value="" disabled selected>Elige un paquete</option>
                                            @foreach($paquetes as $paquete)
                                                <option value="{{$paquete->id}}">{{$paquete->tipo}}</option>
                                            @endforeach
                                        </select>
                                        <label>Paquete</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="fa fa-phone prefix"></i>
                                    <input id="datetimepicker" type="text" class="" name="fecha" required>
                                    <label for="datetimepicker">Fecha</label>
                                </div>
                                <div class="col l6">
                                    <div class="input-field">
                                        <select name="estado">
                                            <option value="" disabled selected>Elige el estado</option>
                                            <option value="0">No entregado</option>
                                            <option value="1">Entregado</option>
                                        </select>
                                        <label>Estado</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea" name="descripcion"></textarea>
                                    <label for="icon_prefix2">Descripción</label>
                                </div>
                                <div class="col l6">
                                    <div class="input-field">
                                        <select name="compromiso">
                                            <option value="" disabled selected>Elige un compromiso</option>
                                            @foreach($compromisos as $compromiso)
                                                <option value="{{$compromiso->id}}">{{$compromiso->nombre}}</option>
                                            @endforeach
                                        </select>
                                        <label>Compromiso</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l4">
                                    {!! Form::submit('Guardar',['class'=>'btn waves-effect']) !!}
                                </div>
                                <div class="col l4 offset-l4 right">
                                    <a href="#" class="btn waves-effect">Ir a Contrato</a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col l3 m3 s12">
                    <div class="card-panel hoverable">
                        <span class="card-title">Lista de Eventos</span>

                            <li><a href="#">Huancayo</a></li>
                        <button id="printer">Inprimir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('plugins/datetimepicker/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('js/jquery.PrintArea.js')}}"></script>
    <script>
        jQuery('#datetimepicker').datetimepicker({
            //format:'d-m-Y H:i',
            lang:'es'
        });

        $(document).ready(function() {
            $('select').material_select();
            $('#printer').click(function(){
                $('div#print').printArea();
            });
        });
    </script>
@endsection
