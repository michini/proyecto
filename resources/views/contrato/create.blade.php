@extends('layouts.layout')
@section('titulo','Contrato')
@section('contenido')
    <div class="row">
        <div class="col l11 offset-l1">
            <div class="row">
                <div class="col l12">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col l12">
                                <label for="id">Id</label>
                                <input type="text" id="id" disabled value="{{$evento->id}}"/>
                                <label for="res">Responsable</label>
                                <input type="text" disabled id="res" value="{{Auth::user()->nombre}}"/>
                                <label for="cli">Cliente</label>
                                <input type="text" id="cli" value=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
