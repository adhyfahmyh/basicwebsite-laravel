<div class="side-nav db-sm text-center">
    <h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
    <div class="main">
        <ul class="list-group">
            <a class = "{{Request::is('profile') ? 'active' : ''}}" href="/profile"><li class="list-group-item">
                Profile</li>
            </a>
            <a class = "{{Request::is('editProfile') ? 'active' : ''}}" href="/profile/{{ Auth::user()->firstname }}/edit"><li class="list-group-item">
                Edit Profile</li>
            </a>
            <a class = "{{Request::is('createdContent') ? 'active' : ''}}" href="/createdContent"><li class="list-group-item">
                Created Contents</li>
            </a>
            <a class = "{{Request::is('savedContent') ? 'active' : ''}}" href="/savedContent"><li class="list-group-item">
                Saved Contents</li>
            </a>
        </ul>
    </div>
</div>