<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Acme') }}</title>

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
        @include('inc.navbar')
        @if (Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                @if (Request::is('/') or Request::is('about') or Request::is('contact') or Request::is('messages') or Request::is('posts'))
                    <div>
                        @include('inc.sidebar')
                    </div>
                @endif
                @if (Request::is('profile') or Request::is('profile/{{Auth::user()->firstname}}/edit'))
                    <div>
                        @include('inc.sidebar-profile')
                    </div>
                @endif
                <div class="col-md-8 col-lg-8" id="content-wrap">
                    @include('inc.messages')
                    @yield('content')
                </div>
               
                
            </div>
        </div>
        
        
      
    </div>
    @include('inc.footer')

    <script type="text/javascript" src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
</body>
</html>
