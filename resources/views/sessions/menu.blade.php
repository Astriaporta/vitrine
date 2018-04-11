@if (Auth::guest())
<a class="nav-link" href="{{ $login->prefix }}">{{ ucfirst(trans('menu.' . $login->prefix)) }}</a>
@else
<a class="nav-link" href="{{ $logout->prefix }}" onclick="event.preventDefault();
  document.getElementById('logout-form').submit();">
  {{ ucfirst(trans('menu.' . $logout->prefix)) }}
</a>

<form id="logout-form" class="hidden" action="{{ route('logout') }}" method="POST">
  {{ csrf_field() }}
</form>
@endif
