@extends('layouts.app')

@section('content')
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
            <hr>
            <div class="content-score" name="contentscore">
                <div id="save_container">
                    <div id="save_text_container">
                        <p id="save_text">Tekan logo di samping untuk bookmark atau menyimpan konten ini!</p>
                    </div>
                    <div id="save_btn_container">
                        <form action="{{ route('content.bookmark')}}" method="POST" id="bookmark" name="bookmark" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="POST">
                            <input type="hidden" name="content_id" id="contentId" value="{{$content->id}}">
                            <input type="checkbox" name="bookmark" id="savebtn" value="1">
                            {{-- <input type="checkbox" name="bookmark" id="save" value="1"> --}}
                            <label for="savebtn"></label>
                        </form>
                    </div>
                </div> 
                <div class="rating-container">
                    <div class="rating-overal">
                        <span class="star-rating-overal"></span>
                    </div>
                    <div class="rating-user">

                        <div class="give-rating">
                            <form action="{{ route('content.rating')}}" method="POST" id="rating" name="rating" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="content_id" id="contentId" value="{{$content->id}}">
                                <span class="star-rating">
                                    <input type="radio" name="rating" value="1" id="1" title="1/10"><i></i>
                                    <input type="radio" name="rating" value="2" id="2" title="2/10"><i></i>
                                    <input type="radio" name="rating" value="3" id="3" title="3/10"><i></i>
                                    <input type="radio" name="rating" value="4" id="4" title="4/10"><i></i>
                                    <input type="radio" name="rating" value="5" id="5" title="5/10"><i></i>
                                    <input type="radio" name="rating" value="6" id="6" title="6/10"><i></i>
                                    <input type="radio" name="rating" value="7" id="7" title="7/10"><i></i>
                                    <input type="radio" name="rating" value="8" id="8" title="8/10"><i></i>
                                    <input type="radio" name="rating" value="9" id="9" title="9/10"><i></i>
                                    <input type="radio" name="rating" value="10" id="10" title="10/10"><i></i>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
                
                <span class="r-text">{{round($ratings)}}</span><span>/10</span>
                
                {{-- <p>Rating dari pengguna: {{0.5 * round($content_rating / 0.5)}}<strong>/10</strong></p>
                <p>Rating dari anda: {{0.5 * round($ratings / 0.5)}}<strong>/10</strong></p>
                <form action="{{action('RatingsController@store')}}" method="post" class="content-score" id="content_score" enctype="multipart/form-data">
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
        <form style="display:none;" action="{{ route('content.selection')}}" method="POST" id="selection" name="selection" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="content_id" id="contentId" value="{{$content->id}}">
            <input type="text" name="selection_count" id="contentSelectionCount" value="{{$selection}}">
        </form>
        <form style="display:none;" action="{{ route('content.timespent')}}" method="POST" id="timespent" name="timespent" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="POST">
            <input type="text" name="content_id" id="contentId" value="{{$content->id}}">
            <input type="text" name="time_count" id="seconds">
        </form>
    </div> 
    <style>
        
    </style>
    <script>
        var book = {{ round($bookmarked) }};
        if (book !== 0) {
            document.getElementById("savebtn").checked = true;
            document.getElementById("save_text").innerHTML = "Terima kasih anda telah menyimpan konten ini Silahkan lihat "+"<a href='/saved-content/{{ Auth::user()->username }}'>di sini! </a>";
        }
        $('input[id="savebtn"]').click(function(){ 
            if (this.checked) {
                var bookmarks = $("#bookmark").serialize();
                // $('.book').html(bookmark);
                $.ajax({
                    url:"{{ route('content.bookmark') }}",
                    method:'POST',
                    data: bookmarks,
                    success: function(){
                        alert( "Konten telah disimpan ke dalam daftar konten yang disimpan");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Some error..");
                    }
                });
            }else{
                // $("#" + sspan).remove();//what should go here
                var bookmarks = $("#bookmark").serialize();
                $.ajax({
                    url:"{{ route('content.delete_bookmark') }}",
                    method:'POST',
                    data: bookmarks,
                    success: function(){
                        alert( "Konten telah dihapus dari daftar konten yang disimpan");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Some error..");
                    }
                });
            }
        });

        var rate = {{round($ratings)}};
        radiobtn = document.getElementById(rate);
        radiobtn.checked = true;
        var rating = $('#rating');
        $('input[type=radio]').click(function(e) {
            var value = $(this).val();
            $.ajax({
                url:"{{ route('content.rating')}}",
                method:'POST',
                data: rating.serialize(),
                success:alert('Berhasil memberikan rating')
            });
            $('.r-text').html(value);
        });
        window.onload = () => {
            let totalSeconds = document.getElementById("seconds").value;
            let intervalId = null;

            intervalId = setInterval(startTimer, 1000);
            function startTimer() {
                document.getElementById("seconds").value = ++totalSeconds;
            }
        };
        window.onunload = function() {
            let $time_spent = $('#timespent');
            $.ajax({
                url:"{{ route('content.timespent')}}",
                method:'POST',
                data: $time_spent.serialize()
            });
        };

        setTimeout(function(){
            let selectionCount = document.getElementById('contentSelectionCount').value;
            let selectionCountPlusOne = parseInt(selectionCount)+1;

            document.getElementById('contentSelectionCount').value = selectionCountPlusOne;
            let $formVar = $('#selection');
            
            $.ajax({

                url:"{{ route('content.selection')}}",
                method:'POST',
                data: $formVar.serialize()
            });
        }, 1000);

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
        };
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

    </script>
@endsection