@extends('layouts.app')

@section('content')
    {{-- <input id="readOnlyOn" onclick="toggleReadOnly();" type="button" value="Make CKEditor read-only" style="display:none">
    <input id="readOnlyOff" onclick="toggleReadOnly( false );" type="button" value="Make CKEditor editable again" style="display:none"> --}}
    <h1>Create Post</h1>
    {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST']) }}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    <script type="text/javascript">
        window.onload = function () {

            // CKEDITOR.on("instanceReady", function (ev) {
            //     var bodyelement = ev.editor.document.$.body;
            //     bodyelement.setAttribute("contenteditable", false);


            // });
            // CKEDITOR.config.readOnly = true;
            // CKEDITOR.replace('editor');
        };
    </script>

@endsection