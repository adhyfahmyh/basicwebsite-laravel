@extends('layouts.app')

@section('content')
<h1>Edit Profile <strong>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</strong></h1>
{{-- {{ Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('Firstname', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{Form::hidden('_method', 'PUT')}}
{{ Form::close() }} --}}
@endsection