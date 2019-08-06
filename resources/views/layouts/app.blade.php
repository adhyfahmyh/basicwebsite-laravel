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
        <div class="container">
            @if (Request::is('/'))
                @include('inc.showcase')
            @endif
            <div class="row justify-content-md-center" id="page-container">
                <div class="col-md-8 col-lg-8" id="content-wrap">
                    {{-- <main class="py-4"> --}}
                        @include('inc.messages')
                        @yield('content')
                    {{-- </main> --}}
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
        
        
        @include('inc.footer')
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
