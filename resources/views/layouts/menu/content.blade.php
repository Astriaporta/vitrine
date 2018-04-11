<div id="mySidenav" class="sidenav">
  <div class="navbar navbar-darky h-100">
    <div class="d-flex flex-column justify-content-around h-100">
      @if (Auth::check())
        <h3 class="text-light text-center">{{ Auth::user()->name }}</h3>
      @endif
      <nav class="nav nav-masthead d-flex flex-column">
        @foreach($menu as $item)
          @if(!in_array($item->prefix, ['login', 'logout', 'contact/list', 'parameters']) && $item->activated )
            <a class="nav-link{{ (Request::is($item->prefix) ? ' active' : null ) }}" href="/{{ $item->prefix }}">
              {{ ucfirst(trans('menu.' . ($item->prefix != null ? str_replace('/', '-', $item->prefix) : 'home'))) }}
            </a>
          @endif
          @if (in_array($item->prefix, ['contact/list', 'parameters']) && Auth::check() && $item->activated)
            <a class="nav-link{{ (Request::is($item->prefix) ? ' active' : null ) }}" href="/{{ $item->prefix }}">
              {{ ucfirst(trans('menu.' .  str_replace('/', '-', $item->prefix))) }}
            </a>
          @endif
        @endforeach
        @include('sessions.menu')
      </nav>

    </div>
  </div>
</div>
