@section('sidebar')
<div class="sidebar text-center">
    <h2>Welcome</h2>
    <a class = "{{Request::is('messages') ? 'active' : ''}}" href="/messages">Messages</a>
    <a class = "{{Request::is('posts') ? 'active' : ''}}" href="/posts">Contents</a>
</div>

@show