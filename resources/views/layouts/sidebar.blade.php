<header>
      <nav class="top-nav">
        <div class="container">
        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
        <ul id="slide-out" class="side-nav fixed hoverable collapsible" data-collapsible="accordion">
                <li class="user-details cyan darken-2">
                  <div class="row">
                    <div class="col s12" style="text-align:center;">
                      <div class="card user-panel">
                        <div class="card-image image">
                          <img class="profile-user-img" src="{{asset('img')."/".Auth::user()->photo}}">
                          <span class="card-title flow-text">{{\Illuminate\Support\Str::title(Auth::user()->username)}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="{{url('/home')}}" class="collapsible-header waves-effect waves-dark">Inicio<i class="mdi-action-assignment-late"></i></a></li>
                <li class="no-padding">
                  <ul class="collapsible">
                    <li>
                      <a class="collapsible-header waves-effect waves-teal">Responsables<i class="mdi-action-accessibility"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="{{route('user.create')}}">Crear</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header">Clientes<i class="mdi-social-people"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="{{route('cliente.create')}}">Crear</a></li>
                          <li><a href="#!">Second</a></li>
                          <li><a href="#!">Third</a></li>
                          <li><a href="#!">Fourth</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header waves-effect waves-dark">Eventos<i class="mdi-notification-voice-chat"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">First</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header waves-effect waves-dark">Compromisos<i class="mdi-action-perm-contact-cal"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">First</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header waves-effect waves-dark">Filmadores<i class="mdi-social-people-outline"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">First</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header waves-effect waves-dark">Contratos<i class="mdi-file-folder-shared"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">First</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header waves-effect waves-dark">Pagos<i class="mdi-editor-attach-money"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">First</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="no-padding">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <a class="collapsible-header waves-effect waves-dark">Reportes<i class="mdi-av-my-library-books"></i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a href="#!">First</a></li>
                          <li><a href="#!">Second</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>

              <!-- Inicio NavBar -->
              @include('layouts.navbar')
              <!-- Fin NavBar -->
              
        </div>
      </nav>
    </header>