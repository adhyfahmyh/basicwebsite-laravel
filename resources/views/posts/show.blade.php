@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1><br>
    <a href="/posts" class="btn btn-default" id="back_post">Back</a>
    <br><br>
    <div>
        <textarea id="editor">
            {!!$post->body!!}
        </textarea>
    </div>
    
    <hr> 
        <small>Written on {{$post->created_at}} by {{@$post->user->firstname}}</small>
    <br>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default" id="edit_post">Edit Post</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'id'=>'delete_post'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    <style>
        #back_post{
            background-color: #b5b5b0;
            color: white;
        }
        #edit_post{
            background-color: #b5b5b0;
            color: white;
        }
        #delete_post{
            float: right;
        }
    </style>
@endsection