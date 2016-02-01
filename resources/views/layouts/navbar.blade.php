<nav>
    <div class="nav-wrapper">
        @if(Auth::guest())
        <a href="#" data-activates="slide" class="button-collapse"><i class="material-icons">menu</i></a>
        @endif
        <ul id="slide" class="side-nav">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#galeria">Galeria</a></li>
            <li><a href="{{url('/login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            @if(Auth::guest())
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="{{url('/login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
            @else
            <li>
                <a class="dropdown-button" href="#!" data-activates="dropdown1">{{\Illuminate\Support\Str::title(Auth::user()->username)}}<i class="material-icons right">arrow_drop_down</i></a>
            </li>
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="{{route('user.show',Auth::user()->id)}}">Perfil</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('/logout')}}">Salir</a></li>
                </ul>
            @endif
        </ul>
    </div>
</nav>
