@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="card-panel {{ Session::get('flash_notification.level') }}" id="alert">
            <a href="#" id="close"><i class="material-icons right white-text">close</i></a>
            <span class="white-text">{!! Session::get('flash_notification.message') !!}</span>
        </div>
    @endif
@endif
