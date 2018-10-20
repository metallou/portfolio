<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @foreach ($A_ROUTES as $name => $label)
          <li class="nav-item @if(Route::is($name)) active  @endif">
            <a class="nav-link" href="{{ route($name, [], false) }}">{{ $label }}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>
