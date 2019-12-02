@extends('layouts.app')

@section('content')
{{-- <h2>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
<h3>Edit your profile</h3>
{{ Form::open(['action' => ['ProfileController@update', Auth::user()->id], 'method' => 'POST']) }}
    <div class="form-wrapper">
        <div class="form-group">
            {{Form::label('firstname', 'Nama Depan: ')}}
            {{Form::text('firstname', Auth::user()->firstname, ['class' => 'form-control', 'placeholder' => Auth::user()->firstname])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname', 'Nama Belakang: ')}}
            {{Form::text('lastname', Auth::user()->lastname, ['class' => 'form-control', 'placeholder' => Auth::user()->lastname])}}
        </div>
        <div class="form-group">
            {{Form::label('about', 'Deskripsi Diri:')}}
            {{Form::textarea('about', Auth::user()->about, ['class' => 'form-control', 'placeholder' => Auth::user()->about])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Alamat E-Mail:')}}
            {{Form::email('email', Auth::user()->email, ['class' => 'form-control', 'placeholder' => Auth::user()->email])}}
        </div>
        <div class="form-group">
            {{Form::label('contact', 'No Hp:')}}
            {{Form::text('contact', Auth::user()->contact, ['class' => 'form-control', 'placeholder' => Auth::user()->contact])}}
        </div>
        <div class="form-group">
            {{Form::label('birthday', 'Tanggal Lahir:')}}
            {{Form::date('birthday', Auth::user()->birthday, ['class' => 'form-control', 'placeholder' => Auth::user()->birthday])}}
        </div>
        <div class="form-group">
            {{Form::label('link', 'Link Personal:')}}
            {{Form::url('link', Auth::user()->link, ['class' => 'form-control', 'placeholder' => Auth::user()->link])}}
        </div>
    </div>
    <div class="form-submit">
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {{Form::hidden('_method', 'PUT')}}
    </div>
    
{{ Form::close() }} --}}
<br>
<div class="container-fluid">
    @include('inc.sidebar-profile')
    <div class="content">
        <h2 class="text-center">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h2>
        <h5 class="text-center">Edit Profil Anda</h5>
        {{ Form::open(['action' => ['ProfileController@update', Auth::user()->id], 'method' => 'POST']) }}
            <div class="form-wrapper">
                <div class="form-group">
                    {{Form::label('username', 'Username: ')}}
                    {{Form::text('username', Auth::user()->username, ['class' => 'form-control', 'placeholder' => Auth::user()->username, 'disabled'=>true])}}
                </div>
                <div class="form-group">
                    {{Form::label('firstname', 'Nama Depan: ')}}
                    {{Form::text('firstname', Auth::user()->firstname, ['class' => 'form-control', 'placeholder' => Auth::user()->firstname])}}
                </div>
                <div class="form-group">
                    {{Form::label('lastname', 'Nama Belakang: ')}}
                    {{Form::text('lastname', Auth::user()->lastname, ['class' => 'form-control', 'placeholder' => Auth::user()->lastname])}}
                </div>
                <div class="form-group">
                    {{Form::label('about', 'Deskripsi Diri:')}}
                    {{Form::textarea('about', Auth::user()->about, ['class' => 'form-control', 'placeholder' => Auth::user()->about])}}
                </div>
                <div class="form-group">
                    {{Form::label('email', 'Alamat E-Mail:')}}
                    {{Form::email('email', Auth::user()->email, ['class' => 'form-control', 'placeholder' => Auth::user()->email])}}
                </div>
                <div class="form-group">
                    {{Form::label('contact', 'No Hp:')}}
                    {{Form::text('contact', Auth::user()->contact, ['class' => 'form-control', 'placeholder' => Auth::user()->contact])}}
                </div>
                <div class="form-group">
                    {{Form::label('birthday', 'Tanggal Lahir:')}}
                    {{Form::date('birthday', Auth::user()->birthday, ['class' => 'form-control', 'placeholder' => Auth::user()->birthday])}}
                </div>
                <div class="form-group">
                    {{Form::label('link', 'Link Personal:')}}
                    {{Form::url('link', Auth::user()->link, ['class' => 'form-control', 'placeholder' => Auth::user()->link])}}
                </div>
            </div><br>
            <div class="form-submit col-12">
                {{Form::submit('Submit', ['class' => 'col-12 btn btn-primary'])}}
                {{Form::hidden('_method', 'PUT')}}
            </div>
        {{ Form::close() }}
    </div>
</div>

@endsection