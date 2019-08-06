@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>

                    {{-- show posts by user id --}}
                    <h3>Your Posts!</h3>
                        {{-- @if(count($posts) > 0)
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
                        @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
