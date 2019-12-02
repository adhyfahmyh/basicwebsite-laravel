<div class="sidebar">
    <div class="text-center col">
        <i class="fa fa-user-circle-o" style="font-size:80px"></i>
        <h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
    </div>
    <hr>
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

