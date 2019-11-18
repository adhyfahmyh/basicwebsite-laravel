@extends('layouts.app')

@section('content')
<h1>Contact Page</h1>
{!! Form::open(array('url' => 'contact/submit','method' => 'POST')) !!}
<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
</div>
<div class="form-group">
    {{ Form::label('email', 'E-mail Address') }}
    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@email.com'])}}
</div>
<div class="form-group">
    {{ Form::label('message', 'Message') }}
    {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'])}}
</div>
<div>
    {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection