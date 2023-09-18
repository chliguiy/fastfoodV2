<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b368ac6dc3.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite('resources/css/app.css')
    @vite('resources/css/style.css')
    @vite('resources/js/app.js')

</head>
<body class="text-gray-900 bg-gray-100 font-body">
<div id="app">
</div>
</body>
</html>
