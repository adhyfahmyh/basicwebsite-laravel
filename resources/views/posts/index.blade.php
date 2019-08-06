@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <br>
    <div class="btn">
        <a href="/posts/create"> <h3>Create Post</h3></a>        
    </div>
    <br><br><br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/posts/{{$post->id}}">
                            <h3>{{$post->title}}</h3>
                            <small>Written on {{$post->created_at}}</small>
                        </a>
                    </li>
                </ul>
            </div>
            <br>
            <!-- <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
            </div> -->
        @endforeach
        {{$posts->links()}}
    @else
        <p>NO POST FOUND</p>
    @endif
@endsection