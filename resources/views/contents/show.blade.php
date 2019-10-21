@extends('layouts.app')

@section('content')
<a href="/contents" class="btn btn-default" id="back_post">Back</a>
    <div class="show-container">
        <div class="show-title">
            <h1>{{$content->title}}</h1><br>
        </div>
        <br><br>
        <div>
            {!! $content->description !!}
        </div>
        <div style="margin:0;">
            <small>Kategori: {!! $content->category !!}</small>
            <small>Tag: #{!! $content->tag !!}</small>
        </div>
        <hr>
        <div class="show-main">
            <div class="show-img" style="">
                <img src="{{ url('/data_file/images/'.$content->content_img) }}" alt="">
            </div>
            <div style="margin-bottom:20px;">
                {!! $content->body !!} 
            </div>
            <div class="show-file">
                <iframe src="{{ url('/data_file/files/'.$content->file) }}" width="100%" height="700px" allowfullscreen webkitallowfullscreen></iframe>
                <hr>
            </div>
            <div class="show-video">
                <iframe src="{!! $content->video !!}" frameborder="0" width="100%" height="500px" allowfullscreen></iframe>
            </div>
        </div>
        <hr> 
            <small>Written on {{$content->created_at}} by {{@$content->user->firstname}}</small>
        <br>
    </div>
        {{-- <a href="/contents/{{$content->id}}/edit" class="btn btn-default" id="edit_post">Edit Post</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'id'=>'delete_post'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!} --}}
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