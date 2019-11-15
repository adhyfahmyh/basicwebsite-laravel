
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
                    {{-- <li class="{{Request::is('about') ? 'active' : ''}}">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="{{Request::is('contact') ? 'active' : ''}}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li> --}}
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
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                            {{-- <a class="dropdown-item" href="/dashboard">Dashboard</a> --}}
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
</nav>
