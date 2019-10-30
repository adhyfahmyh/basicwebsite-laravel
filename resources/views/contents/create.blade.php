@extends('layouts.app')
 
@section('content')
<div class="mainsection">
    <h2>Buat Konten</h2><br>
    {{ Form::open(['action' => 'ContentsController@store', 'method' => 'POST', 'enctype' => "multipart/form-data"]) }}
    {{ csrf_field() }}
    {{ method_field('post') }}
    <div class="form-group">
        {{Form::label('title', 'Judul Konten')}}
        {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Judul Konten'])}}
    </div>
    <div class="form-group upload">
        {{Form::label('content_img', 'Gambar Konten')}}
        {{Form::file('content_img', [ 'class' => 'form-control', 'placeholder' => 'Upload Gambar'])}}
    </div>
    <div class="form-group description">
        {{Form::label('description', 'Deskripsi')}}
        {{Form::textarea('description', null, [ 'class' => 'form-control', 'placeholder' => 'Deskripsi Konten'])}}
    </div>
    <div class="form-group select">
        {{Form::label('category', 'Kategori')}}
        {{Form::select('category', 
        ['1' => '1', '2' => '2', '3' => '3'], 
        ['placeholder' => 'Pilih Kategori', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('tag', 'Tag')}}
        {{Form::text('tag', null, [ 'class' => 'form-control', 'placeholder' => 'Tag'])}}
    </div>
    <div class="form-group body">
        {{Form::label('body', 'Penjabaran')}}
        {{Form::textarea('body', null, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Silahkan berikan penjabaran tentang konten pembelajaran..'])}}
    </div>
    <div class="form-group upload">
        {{Form::label('file', 'File')}}
        {{Form::file('file', [ 'class' => 'form-control', 'placeholder' => 'Upload File'])}}
    </div>
    <div class="form-group">
        {{Form::label('video', 'Video')}}
        {{Form::text('video', null, [ 'class' => 'form-control', 'placeholder' => 'Masukan URL video dari YouTube atau website lain'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
    </div>
    
</div>
@endsection

