<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{env('APP_NAME') }} | @yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- icons --}}
    @yield('cdn')
    <!-- Usando Vite -->
    @vite(['resources/js/app.js','resources/js/app.js'])
</head>

<body class="">
    <div>

        @include('layouts.partials.header')

        <main class="container">
            @yield('content')
        </main>

    </div>

    @yield('modals')
</body>

</html>
