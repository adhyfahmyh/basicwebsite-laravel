@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container">
        <div class="main-section">
            <div class="side-nav">
                <h2>{{ Auth::user()->name }}</h2>
                <ul>
                    <li><a class = "{{Request::is('createdContent') ? 'active' : ''}}" href="/createdContent">Created Contents</a>
                    </li>
                    <li><a class = "{{Request::is('savedContent') ? 'active' : ''}}" href="/savedContent">Saved Contents</a>
                    </li>
                </ul>
            </div>
            <div>
                <h1>Profile</h1>
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ Auth::user()->name }}</li>
                    <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection