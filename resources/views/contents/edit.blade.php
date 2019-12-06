@extends('layouts.app')
 
@section('content')
<div class="mainsection">
    <div class="text-center">
        <h4>Edit Konten</h4>
        <h2>{{ $content->title }}</h2><br>
    </div>
    {{ Form::open(['action' => 'ContentsController@update', 'method' => 'POST', 'enctype' => "multipart/form-data"]) }}
    {{ csrf_field() }}
    {{ method_field('post') }}
    <input type="hidden" name="content_id" id="content_id" value="{{ $content->id }}">
    <div class="form-group">
        {{Form::label('title', 'Judul Konten')}}<p style="margin:0;color:crimson;display:inline">*</p>
        {{Form::text('title', $content->title, ['class' => 'form-control', 'placeholder' => 'Judul Konten', 'required' => 'required'])}}
    </div>
    {{-- <div class="form-group upload">
        {{Form::label('content_img', 'Gambar Konten')}}
        {{Form::file('content_img', [ 'class' => 'form-control', 'placeholder' => 'Upload Gambar'])}}
    </div> --}}
    <div class="form-group description">
        {{Form::label('description', 'Deskripsi')}}
        {{Form::textarea('description', $content->description, [ 'class' => 'form-control', 'placeholder' => 'Deskripsi Konten'])}}
    </div>
    <div class="form-group select   ">
        {{Form::label('category', 'Kategori')}}<p style="margin:0;color:crimson;display:inline">*</p><br>
        {{Form::select('category', [
            $content->category,
            'Membaca Teks Nonsastra' => 'Membaca Teks Nonsastra', 
            'Membaca Teks Sastra' => 'Membaca Teks Sastra', 
            'Menulis Teks Nonsastra' => 'Menulis Teks Nonsastra',
            'Menulis Teks Sastra' => 'Menulis Teks Sastra',
            'Ciri dan Struktur Teks' => 'Ciri dan Struktur Teks',
            'Kebahasaan dalam Teks' => 'Kebahasaan dalam Teks',
        ], 
        ['placeholder' => 'Pilih Kategori', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('tag', 'Tag')}}
        {{Form::text('tag', $content->tag, [ 'class' => 'form-control', 'placeholder' => 'Tag'])}}
    </div>
    <div class="form-group body">
        {{Form::label('body', 'Penjabaran')}}<p style="margin:0;color:crimson;display:inline">*</p>
        {{Form::textarea('body', $content->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Silahkan berikan penjabaran tentang konten pembelajaran..', 'required' => 'required'])}}
    </div>
    {{-- <div class="form-group upload">
        {{Form::label('file', 'File')}}<p style="margin:0;color:crimson;display:inline">*</p>
        {{Form::file('file', [ 'class' => 'form-control', 'placeholder' => 'Upload File'])}}
    </div> --}}
    <div class="form-group">
        {{Form::label('video', 'Video')}}
        {{Form::text('video', $content->video, [ 'class' => 'form-control', 'placeholder' => 'Masukan URL video dari YouTube atau website lain'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
    </div>
    
</div>

{{-- CKEDITOR 4 PACKAGE --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    var config = {};
    config.placeholder = 'somevalue';
    CKEDITOR.replace('editor', config);
</script>
@endsection

