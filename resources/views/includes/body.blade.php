<div id="app">
  @include('includes.nav')
  <main class="card m-5">
    <header class="card-header bg-dark text-white">
      <h1 class="h1">@yield('name')</h1>
    </header>
    @yield('content')
  </main>
</div>

<script src="js/pages/@yield('page').js" defer></script>

