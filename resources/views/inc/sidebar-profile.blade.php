{{-- <div id="user-short">
    <div class="fx-c">
        <img alt="user-avatar" class="user-avatar user-avatar--image" src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png">
    </div>
    <div class="tooltip-container">
        <h4>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h4>
    </div>
</div>
<ul class="list-group" id="list-group">
    <a href="/profile/{{ Auth::user()->username }}" class="">
        <li class="list-group-item">
            Profil
        </li>
    </a>
    <a href="/profile/{{ Auth::user()->username }}/edit" class="{{Request::is('profile/*/edit') ? 'active' : ''}}">
        <li class="list-group-item">
            Edit Profil
        </li>
    </a>
    <a href="/created-content/{{ Auth::user()->username }}" class="{{Request::is('created-content/*') ? 'active' : ''}}">
        <li class="list-group-item">
            Konten yang Dibuat
        </li>
    </a>
    <a href="/saved-content/{{ Auth::user()->username }}" class="{{Request::is('saved-content/*') ? 'active' : ''}}">
        <li class="list-group-item">
            Konten yang Disimpan
        </li>
    </a>
</ul> --}}
<div class="sidebar">
    <div class="row d-flex justify-content-center">
        <div class="text-center col" style="max-width:100%">
            <i class="fa fa-user-circle-o" style="font-size:80px"></i>
            <h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
        </div>
    </div><hr>
    <a class="sidebar-item {{Request::is('profile/*') ? 'active' : ''}}" href="/profile/{{ Auth::user()->username }}">
        <h6 class="mb-0">Profil Anda</h6>
    </a>
    <a class="sidebar-item {{Request::is('profile/*/edit') ? 'active' : ''}}" href="/profile/{{ Auth::user()->username }}/edit">
        <h6 class="mb-0">Edit Profil</h6>
    </a>
    <a class="sidebar-item {{Request::is('created-content/*') ? 'active' : ''}}" href="/created-content/{{ Auth::user()->username }}">
        <h6 class="mb-0">Konten yang Dibuat</h6>
    </a>
    <a class="sidebar-item {{Request::is('saved-content/*') ? 'active' : ''}}" href="/saved-content/{{ Auth::user()->username }}">
        <h6 class="mb-0">Konten yang Disimpan</h6>
    </a>
</div><hr>

