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
            <div class="show-title text-center">
                <h3>{{$content->title}}</h3>
            </div>
            <div class="content-body">
                <div class="app-row-content">
                    <div class="app-curriculum-item">
                        <div class="curriculum-item-view">
                            <div class="curriculum-item-view-absolute">
                                <div class="curriculum-item-view-aspect-ratio">
                                    <div class="curriculum-item-view-content-container">
                                        <div class="curriculum-item-view-scaled-height-limiter">
                                            <div class="curriculum-item-view-absolute-height-limiter">
                                                <div class="curriculum-item-view-content" data-purpose="curriculum-item-viewer-content">
                                                    <iframe src="/ViewerJS/#..{{ ('/data_file/files/'.$content->file) }}" frameborder="0" height="100%" width="100%" allowfullscreen webkitallowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-score">
                {{-- <form action="{{action('ContentsController@giveRating')}}" method="post" class="content-score" id="content_score" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <input type="hidden" name="content_id" value="{{$content->id}}">
                    <select name="rating" id="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form> --}}
                {{ Form::open(['action' => 'ContentsController@giveRating', 'method' => 'POST', 'enctype' => "multipart/form-data"]) }}
                {{ csrf_field() }}
                {{ method_field('post') }}
                {!!Form::hidden('content_id', $content->id)!!}
                <div class="form-group select">
                    {{Form::label('rating', 'Rating')}}
                    {{Form::select('rating', 
                    ['1' => '1', 
                    '2' => '2', 
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '10' => '10'
                    ], 
                    ['placeholder' => 'Pilih Kategori', 'class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {{ Form::close() }}
                </div>
            </div>
            <div class="content-dashboard">
                <div class="app-row-content">
                    <div class="app-dashboard-content">
                        <div class="dashboard-wrapper">
                            <div class="dashboard-navbar">
                                <div class="dashboard-tabs-container">
                                    <button class="tablink" onclick="openPage('Deskripsi', this, '#E84C54')" id="defaultOpen">Deskripsi</button>
                                    <button class="tablink" onclick="openPage('Penjabaran', this, '#E84C54')">Penjabaran</button>
                                    <button class="tablink" onclick="openPage('TJ', this, '#E84C54')">Tanya Jawab</button>
                                    <button class="tablink" onclick="openPage('Video', this, '#E84C54')">Video</button>
                                </div>
                            </div>
                            <div class="dashboard-content">
                                <div id="Deskripsi" class="tabcontent">
                                    <span>Dibuat oleh: {{$content->user->firstname}} {{$content->user->lastname}}</span>
                                    {{-- <span> --}}
                                        <small>Kategori: <strong>{!! $content->category !!}</strong></small>
                                    {{-- </span> --}}
                                    {{-- <span> --}}
                                        <small>Tag: <strong>{!! $content->tag !!}</strong></small>
                                    {{-- </span> --}}
                                    <hr>
                                    <h5>Deskripsi Konten</h5>
                                    <p>{!! $content->description !!}</p>
                                    <footer>
                                        {{-- <hr> --}}
                                        {{-- <div class="content-footer-description"> --}}
                                        {{-- </div> --}}
                                    </footer>   
                                </div>
                                    
                                <div id="Penjabaran" class="tabcontent">
                                    <h3>News</h3>
                                    <p>{!! $content->body !!} </p> 
                                </div>
                                    
                                <div id="TJ" class="tabcontent">
                                    <h3>Komentar</h3>
                                    {!! Form::open(array('url' => 'CommentController@store','method' => 'POST')) !!}
                                    <div class="form-group">
                                        {{-- {{ Form::label('comment', 'Komentar') }} --}}
                                        {{ Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Tulis komentar anda'])}}
                                    </div>
                                    <div>
                                        {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                                    
                                <div id="Video" class="tabcontent">
                                    <h3>Video Konten</h3>
                                    <iframe src="{!! $content->video !!}" frameborder="0" width="854px" height="480px" allowfullscreen></iframe>
                                </div>
                            </div>
                            <footer>
                                <hr>
                                <div class="created-at">
                                    <small>Dibuat pada: {{ $content->created_at}}</small>
                                </div>
                                <div class="updated-at">
                                    <small>Terakhir diubah: {{ $content->updated_at}}</small>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="sidebar-column">
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
                    </div>
                </div>
            </div>
        </div> --}}
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
    <script>
        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection