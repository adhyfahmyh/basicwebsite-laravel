@extends('layout.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr> 
        <small>Written on {{$post->created_at}}</small>
    <br>
    <a href="/posts" class="btn btn-danger">Back</a>
@endsection