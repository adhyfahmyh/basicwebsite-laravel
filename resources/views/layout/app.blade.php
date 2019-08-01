<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Acme</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
</head>

<body>

    @include('inc.navbar')
    <!-- <main role="main" class="container"> -->
    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row justify-content-md-center" id="page-container">
            @if(!Request::is('signin'))
            <div class="col-md-8 col-lg-8" id="content-wrap">
                @include('inc.messages')
                @yield('content')
            </div>
            @else
                @include('inc.signin')
                @include('inc.messages')
            @endif


            @if(!Request::is('signin'))
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
            @endif

        </div>
    </div>
    <!-- </main> -->

    <footer id="footer" class="text-center">
        <div class="container">
            <p>Copyright 2019 &copy; Acme</p>
        </div>
    </footer>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>

</html>