<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="js/vendor.js" defer></script>
<link href="css/vendor.css" rel="stylesheet">

<script src="js/app.js" defer></script>
<link href="css/app.css" rel="stylesheet">

<script src="js/pages/@yield('page').js" defer></script>
<link href="css/pages/@yield('page').css" rel="stylesheet">

<title>Kévin CASTEJON - @yield('title')</title>

