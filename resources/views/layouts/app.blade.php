<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/vendor.js') }}" defer></script>
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Kévin CASTEJON - @yield('title')</title>
</head>
<body>
    <div id="app">
        @include('includes.nav')
        <main class="card m-5">
            <header class="card-header bg-dark text-white">
              <h1>@yield('section')</h1>
            </header>
            @yield('content')
        </main>
    </div>
</body>
</html>
