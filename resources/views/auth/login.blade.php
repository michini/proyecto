@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="padding-top: 12em;">
        <div class="col l6 offset-l3 m12 s12">
            <div class="card-panel hoverable">
                    <div class="card-body">
                        <form action="{{ url('/login') }}" role="form" method="POST">
                            {{ csrf_field() }}

                            <div class="input-field form-group{{ $errors->has('email') ? 'has-error' : '' }} label-floating">
                                <i class="fa fa-user prefix"></i>
                                <input id="icon_prefix" type="email" class="validate" name="email" value="{{old('email')}}">
                                <label for="icon_prefix">E-mail</label>
                                @if ($errors->has('email'))
                                    <span class="red-text">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-field form-group{{ $errors->has('email') ? ' has-error' : '' }} label-floating">
                                <i class="fa fa-key prefix"></i>
                                <input class="validate" id="password" type="password" name="password">
                                <label for="password">Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="red-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="input-field">
                            <input type="checkbox" id="test5" name="remember"/>
                            <label for="test5">Recordar</label>
                        </div>
                        <div class="input-field">
                            <button class="waves-effect waves-light btn" type="submit"><i class="fa fa-check"></i> Ingresar</button>
                            <a href="{{url('/')}}" class="btn-flat waves-effect right"><i class="fa fa-arrow-left"></i> Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('contents')
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
@endsection
