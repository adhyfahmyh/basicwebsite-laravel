@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST']) }}
        <div class="form-group">
          {{-- <label for=""></label>
          <input type="text"
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small> --}}
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection