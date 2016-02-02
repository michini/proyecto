@if($errors->any())
    <div class="card-panel red lighten-3">
        <span class="white-text">Corrige los siguientes errores</span>
        @foreach($errors->all() as $error)
            <span class="white-text"><li>{{$error}}</li></span>
        @endforeach
    </div>
@endif