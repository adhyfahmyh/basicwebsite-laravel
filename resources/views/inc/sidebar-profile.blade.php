<div id="user-short">
    <div class="fx-c">
        <img alt="user-avatar" class="user-avatar user-avatar--image" src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80">
    </div>
    <div class="tooltip-container">
        <h4>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h4>
    </div>
</div>
<ul class="list-group" id="list-group">
    <a href="/profile/{{ Auth::user()->username }}" class="">
        <li class="list-group-item">
            Profile
        </li>
    </a>
    <a href="/profile/{{ Auth::user()->username }}/edit" class="{{Request::is('profile/*/edit') ? 'active' : ''}}">
        <li class="list-group-item">
            Edit Profile
        </li>
    </a>
    <a href="/created-content/{{ Auth::user()->username }}" class="{{Request::is('created-content/*') ? 'active' : ''}}">
        <li class="list-group-item">
            Created Contents
        </li>
    </a>
    <a href="/saved-content/{{ Auth::user()->username }}" class="{{Request::is('saved-content/*') ? 'active' : ''}}">
        <li class="list-group-item">
            Saved Contents
        </li>
    </a>
</ul>