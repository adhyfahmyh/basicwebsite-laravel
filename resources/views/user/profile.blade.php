@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container">
        <div class="main-section">
            <div>
                <h1>Profile</h1>
                <ul class="list-group">
                    <li class="list-group-item">Name: {{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</li>
                    <li class="list-group-item">About: {{ Auth::user()->about}}</li>
                    <li class="list-group-item">Email: {{ Auth::user()->email}}</li>
                    <li class="list-group-item">Contact: {{ Auth::user()->contact}}</li>
                    <li class="list-group-item">Birthday: {{ Auth::user()->birthday}}</li>
                    <li class="list-group-item">Link: <a href="{{ Auth::user()->link}}">{{ Auth::user()->link}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection