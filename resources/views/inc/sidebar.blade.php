<h2>Sidebar</h2>
<ul class="list-group">
    <a class = "{{Request::is('messages') ? 'active' : ''}}" href="/messages">
        <li class="list-group-item">
            Messages
        </li>
    </a>
    <a class = "{{Request::is('posts') ? 'active' : ''}}" href="/posts">
        <li class="list-group-item">
            Contents
        </li>
    </a>
</ul>