@extends('layouts.app')

@section('content')
<br>
    <h1>Posts</h1>
    <br>
    <div class="btn">
        <a href="/posts/create"> <h3>Create Post</h3></a>        
    </div>
    <br><br><br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card-deck" style="display:inline-block;">
                <a href="/posts/{{$post->id}}">
                <div class="card" style="width:275px;height:380px;margin:25px;border-radius: 20px; background:#f2f2f2;">
                    <img src="https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img" alt="post_image" style="border-radius: 20px 20px 0 0">
                    <div class="card-body">
                        <h3 class="card-title">{{$post->title}}</h3>
                        <p class="card-text"></p>
                        <p class="card-text"><small>Written on {{$post->created_at}} by {{@$post->user->firstname}}</small></p>
                    </div>
                    <div class="card-footer" style="border-radius: 0 0 20px 20px;">
                        <small class="text-muted" style="position:relative">Last updated {{$post->updated_at}}</small>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
        
        {{$posts->links()}}
    @else
        <p>NO POST FOUND</p>
    @endif
@endsection


{{-- <div class="well">
        <ul class="list-group">
            <li class="list-group-item">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{@$post->user->firstname}}</small>
            </li>
        </ul>
    </div>
    <br> --}}