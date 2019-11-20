<div id="user-short">
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
</ul>