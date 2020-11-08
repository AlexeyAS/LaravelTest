<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title-block')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">


    @include('includes.header')


    <main class="py-4">
        @if(Request::is('/'))
            @include('includes.hero')
        @endif

        <div class="container mt-5">
            @include('includes.message')
            <div class="row">
                @if(Request::is('users') OR Request::is('login') OR Request::is('register'))
                    <div class="col-12">
                        @yield('content')
                    </div>
                @else
                <div class="col-8">
                    @yield('content')
                </div>

                <div class="col-4">
                    @include('includes.aside')
                </div>
                    @endif
            </div>
            @include('includes.footer')
        </div>
    </main>
</div>
</body>
</html>
