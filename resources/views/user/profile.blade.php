@extends('layouts.app')


@section('content')
<div class="profile-content">
    <ul class="list-group">
        <div style="text-align:center;vertical-align:middle;"><h2 style="padding:10px;margin:0"><strong>Profile</strong></h2></div>
        <li class="list-group-item">
            <ul id="profile-info">
                <li id="profile-info-item1">
                    <strong>Name</strong>
                </li>
                <li id="profile-info-item2">
                    <span>{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</span>
                </li>
            </ul>
        </li>
        <li class="list-group-item" id="li-profile">
            <ul id="profile-info">
                <li id="profile-info-item1">
                    <strong>About</strong>
                <li id="profile-info-item2">
                    <span>{{ Auth::user()->about}}</span>
                </li>
            </ul>
        </li>
        <li class="list-group-item" id="li-profile">
            <ul id="profile-info">
                <li id="profile-info-item1">
                    <strong>Email</strong>
                </li>
                <li id="profile-info-item2">
                    <span>{{ Auth::user()->email}}</span>
                </li>
            </ul>
        </li>
        <li class="list-group-item" id="li-profile">
            <ul id="profile-info">
                <li id="profile-info-item1">
                    <strong>Contact</strong>
                </li>
                <li id="profile-info-item2">
                    <span>{{ Auth::user()->contact}}</span>
                </li>
            </ul>  
        </li>
        <li class="list-group-item" id="li-profile">
            <ul id="profile-info">
                <li id="profile-info-item1">
                    <strong>Birthday</strong>
                </li>
                <li id="profile-info-item2">
                    <span>{{ Auth::user()->birthday}}</span>
                </li>
            </ul>
        </li>
        <li class="list-group-item" id="li-profile">
            <ul id="profile-info">
                <li id="profile-info-item1">
                    <strong>Link</strong>
                </li>
                <li id="profile-info-item2">
                    <span>
                        <a href="{{ Auth::user()->link}}" target="_blank">
                            {{ Auth::user()->link}}
                        </a>
                    </span>
                </li>
            </ul>
        </li>
    </ul>
</div>
@endsection