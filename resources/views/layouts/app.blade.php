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
    {{-- oEmbed API CDN --}}
    <script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key={API KEY}"></script>
    {{-- CKEDITOR 4 LOCAL --}}
    {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script> --}}
    {{-- CKEDITOR 5 local --}}
    {{-- <script src="/vendor/ckeditor5-build-classic/ckeditor.js"></script>
    <script src="vendor/ckeditor5-build-classic/ckeditor5-easy/src/easyimage.js"></script> --}}
    {{-- NICEEDIT EDITOR --}}
    {{-- <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script> --}}
    {{-- TINY MCE --}}
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script> --}}
    {{-- CDN CKEDITOR 5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="container-fluid">
        @include('inc.navbar')

        @if (Request::is('profile*' ,'created-content*' ,'saved-content*'))
            <div class="main-content" id="main-content">
                <div class="content-container">
                    <div class="edit-template">
                        <div class="main-section">
                            <div class="side-nav" id="sidebar" role="navigation">
                                @include('inc.sidebar-profile')
                            </div>
                            <div class="content" id="content">
                                @include('inc.messages')
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (Request::is('posts*'))
            <div class="main-content" id="main-content">
                <div class="content-container">
                    <div class="edit-template">
                        <div class="main-section">
                            <div class="side-nav" id="sidebar" role="navigation">
                                @include('inc.sidebar')
                            </div>
                            <div class="content" id="content">
                                @include('inc.messages')
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="main-content" id="maincontent">
                <div class="content-container">
                    <div class="edit-template">
                        @if (Request::is('/'))
                            @include('inc.showcase')
                        @endif
                        @include('inc.messages')
                        @yield('content')
                    </div>
                </div>
            </div>
        @endif

    </div>
    @include('inc.footer')
</body>
</html>
