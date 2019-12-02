{{-- 
<nav class="navbar navbar-expand-md" id="navbar-1">
    <div class="container">
        <div class="header-logo-container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{config('app.name', 'MyLearning')}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Left Side Of Navbar -->
        <div class="header-left" id="navbarSupportedContent">
            <div class="header-component1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown" id="dropdown-left">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle {{Request::is('contents/*') ? 'active' : ''}}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Konten</a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/contents">Konten Pembelajaran</a>
                            <a class="dropdown-item" href="/">Rekomendasi Konten Pembelajaran</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-component2">
                <div class="header-component2-search">
                    <div class="search">
                        <form action="/contents" method="GET">
                            {{ csrf_field() }}
                            <span class="input-group">
                            <input type="text" placeholder="Cari.." name="search" >
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-link" >
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side Of Navbar -->
        <div class="header-right">
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrasi') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">    
                        <a id="navbarDropdown1" class="nav-link" href="/contents/create" role="button" aria-haspopup="true" aria-expanded="false" v-pre> 
                            Buat Konten
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/profile/{{ Auth::user()->username }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        <i class="fa fa-book"></i>
        {{config('app.name', 'MyLearning')}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @guest
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Registrasi Akun</a>
            </li>
        </ul>
    </div>
    @else
    {{-- <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{Request::is('contents') ? 'active' : ''}}" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Konten Pembelajaran
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/contents/">Semua Konten Pembelajaran</a>
                    <a class="dropdown-item" href="#">Rekomendasi Alur Pembelajaran</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/profile/{{ Auth::user()->username }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div> --}}
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" action="/contents" method="GET">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn" type="button" id="searchButton" style="color:whitesmoke">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <input type="text" name="search" class="form-control" placeholder="Cari.." id="searchInput"  style="display:none">
                        </div> 
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{Request::is('contents') ? 'active' : ''}}" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Konten Pembelajaran
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/contents/">Semua Konten Pembelajaran</a>
                        <a class="dropdown-item disabled" href="#">Rekomendasi Alur Pembelajaran</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{Request::is('profile/*') ? 'active' : ''}}" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/profile/{{ Auth::user()->username }}">Profil Anda</a>
                        <a class="dropdown-item disabled" href="/contents/create">Buat Konten</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Keluar/Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    @endguest
</nav>
<script>
    $(document).ready(function(){
        jQuery('#searchButton').on('click', function(event) {
            jQuery('#searchInput').toggle('show');
        });
    });
</script>
