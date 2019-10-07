@extends('layouts.app')

@section('content')
    <div>
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
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{@$post->user->name}}</small>
                        </li>
                    </ul>
                </div>
                <br>
            @endforeach
            {{-- {{$posts->links()}} --}}
        @else
            <p>NO POST FOUND</p>
        @endif
    </div>
@endsection