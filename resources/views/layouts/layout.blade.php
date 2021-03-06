<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @if(app('env')=='local')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    @if(app('env')=='production')
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @endif
</head>
<body>

    @yield('content')

    <!-- Scripts -->
    @if(app('env')=='local')
    <script src="{{ asset('js/app.js') }}"></script>
    @endif
    @if(app('env')=='production')
    <script src="{{ secure_asset('js/app.js') }}"></script>
    @endif
</body>
</html>
