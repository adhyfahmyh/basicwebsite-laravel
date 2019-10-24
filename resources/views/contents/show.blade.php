@extends('layouts.app')

@section('content')
{{-- <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div> --}}
{{-- <a href="/contents" class="btn btn-default" id="back_post">Back</a> --}}
    {{-- <div class="show-container">
        <button class="openbtn" onclick="openNav()"></button>
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
    </div> --}}
        {{-- <a href="/contents/{{$content->id}}/edit" class="btn btn-default" id="edit_post">Edit Post</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'id'=>'delete_post'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!} --}}
    <div class="column-container">
        <div class="content-column">
            <div class="content-body">
                <div class="app-row-content">
                    <div class="app-curriculum-item">
                        <div class="curriculum-item-view">
                            <div class="curriculum-item-view-absolute">
                                {{-- <div class="curriculum-item-view-aspect-ratio"> --}}
                                    {{-- <div class="curriculum-item-view-content-container"> --}}
                                        {{-- <div class="curriculum-item-view-scaled-height-limiter"> --}}
                                            {{-- <div class="curriculum-item-view-absolute-height-limiter"> --}}
                                                {{-- <div class="curriculum-item-view-content" data-purpose="curriculum-item-viewer-content"> --}}
                                                    <iframe src="https://view.officeapps.live.com/op/embed.aspx?src={{ url('/data_file/files/'.$content->file) }}" frameborder="0" scrolling="auto" allowfullscreen height="100%" width="100%"></iframe>
                                                {{-- </div> --}}
                                            {{-- </div> --}}
                                        {{-- </div> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-dashboard">

            </div>
        </div>
        <div class="sidebar-column">
            <div class="sidebar-sidebar">
                <div class="sidebar-header">
                    <h4>Rekomendasi Konten Pembelajaran Selanjutnya</h4>

                </div>
                <div class="sidebar-content" style="top: 114px; bottom: 0px; width: 25%;">
                    <div data-purpose="curriculum-section-container">
                        <div class="section--section--BukKG" data-purpose="section-panel-0" aria-expanded="false">
                            <div class="section--section-heading--2k6aW">
                                <div class="section--title--eCwjX">
                                    <span>
                                        <span><h4>TEST</h4></span>
                                        <span><small>TESTTESTESTEST</small></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- <ul class="list-group">
                            <li class="list-group-item">
                                <h3><a href="">$post->title</a></h3>
                                <small>Written on  by </small>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
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
        #delete_post{
            float: right;
        }
    </style>
@endsection