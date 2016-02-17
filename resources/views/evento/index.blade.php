@extends('layouts.layout')
@section('titulo','Eventos')
@section('css')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/black-tie/jquery-ui.css">
@endsection
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l12 m12 s12">
                    <div class="card-panel">
                        <div class="col l5 m5 s5">
                            <h3>Lista de Eventos</h3>
                        </div>
                        <div class="col l7 m7 s5">
                            <nav>
                                <div class="nav-wrapper">
                                    {!! Form::open(['route'=>'evento.index','method'=>'GET','role'=>'search']) !!}
                                    <div class="input-field">
                                        <input id="search" type="search" name="evento" required placeholder="Buscar Evento">
                                        <label for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </nav>
                        </div>

                        <table class="centered highlight">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Lugar</th>
                                    <th>Estado</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($eventos as $evento)
                                {!! Form::open(['route'=>['evento.destroy',$evento->id],'method'=>'DELETE']) !!}
                                <tr>
                                    <td>{{$evento->id}}</td>
                                    <td><a href="{{route('evento.show',$evento->id)}}" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Mas">{{$evento->lugar}}</a></td>
                                    @if($evento->estado == 'Entregado')
                                    <td class="green-text">{{$evento->estado}}</td>
                                    @else
                                    <td class="red-text">{{$evento->estado}}</td>
                                    @endif
                                    <td>{{$evento->fecha}}</td>
                                    <td>
                                        <button class="btn red" onclick="return confirm('Desea eliminar el evento?')"><i class="fa fa-trash small"></i></button>
                                        <a href="{{route('evento.show',$evento->id)}}" class="btn blue"><i class="fa fa-edit small"></i></a>
                                    </td>
                                </tr>
                                {!! Form::close() !!}
                            @endforeach
                            </tbody>
                        </table>

                        <div class="center">
                            {!! $eventos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(function()
        {
            var res= {!! $lugares !!};
            $( "#search" ).autocomplete({
                source: res,
                autoFocus: true
            });
            $('.tooltipped').tooltip({delay: 50});
        });
    </script>
@endsection