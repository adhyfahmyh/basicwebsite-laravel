@extends('layout.app')

@section('content')
    <h1>{{$post->title}}</h1><br>
    <a href="/posts" class="btn btn-default" id="back_post">Back</a>
    <br><br>
    <div>
        {!!$post->body!!}
        
    </div>
    <hr> 
        <small>Written on {{$post->created_at}}</small>
    <br>
    <div>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default" id="edit_post">Edit Post</a>
        <div class="pull-right">
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        
    </div>
    <style>
        #back_post{
            background-color: #b5b5b0;
            color: white;
        }
        #edit_post{
            background-color: #b5b5b0;
            color: white;
        }
    </style>
@endsection