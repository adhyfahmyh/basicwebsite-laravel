@extends('layouts.app')

@section('content')
    <div class="column-container">
        <div class="content-column">
            <div>
                {{-- <a href="/contents"><button class="btn btn-warning" style="font-weight:bolder;">Kembali</button></a> --}}
                <a href="javascript:history.back()"><button class="btn btn-warning" style="font-weight:bolder;">Kembali</button></a>
            </div><br>
            <div class="show-title text-center">
                <h3>{{$content->title}}</h3>
            </div>
            <hr>
            <div class="content-score col" name="contentscore">
                <div class="row give-rating">
                    <form action="{{ route('content.rating') }}" method="POST" id="rating" name="rating" enctype="multipart/form-data" >
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
                <div class="row">
                    <div id="rating-container" class="col">
                        <div class="row-md">
                            {{-- <div class="col-4 rating-overall">
                                <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="content rating star">
                                <div class="row">
                                    <span id="ratVal" itemprop="ratingValue">
                                        <h3>{{round($content_rating)}}<small>/10</small></h3>
                                    </span>
                                </div>
                            </div> --}}
                            <div class="col rating-user" style="padding-left:0">
                                <button id="clicktorate" class="col" style="padding-left:0">
                                    <div class="rwrapper btn btn-primary col">
                                        <div class="rating-user-wrapper" id="rating-user-wrapper">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="user rating star" style="margin-right:5px">
                                            {{-- <div class="row"> --}}
                                                {{-- <span> --}}
                                                    <p class="text-center">Berikan Rating</p>
                                                {{-- </span> --}}
                                            {{-- </div> --}}
                                            {{-- <div class="row">
                                                <span>
                                                    <p>Rating</p>
                                                </span>
                                            </div> --}}
                                        </div>
                                        <div class="is-rating-user" id="is-rating-user">
                                            <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="content rating star">
                                            {{-- <div class="row"> --}}
                                                {{-- <span id="userRat" itemprop="userRating"> --}}
                                                    <h3 class="mb-0 text-center"> {{round($ratings)}}</h3>
                                                {{-- </span> --}}
                                            {{-- </div> --}}    
                                                <small class="mb-0 text-center">oleh Anda</small>
                                        </div>
                                    </div>
                                </button>
                            </div>    
                        </div>
                    </div>
                    <div id="save_container" class="col" style="padding:0">
                        <div class="d-flex flex-reverse">
                            <div id="save_text_container" class="p-2">
                                <p id="save_text">Tekan logo di samping untuk bookmark atau menyimpan konten ini!</p>
                            </div>
                            <div id="save_btn_container" class="p-2" style="padding:0;">
                                <form action="{{ route('content.bookmark')}}" method="POST" id="bookmark" name="bookmark" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="content_id" id="contentId" value="{{$content->id}}">
                                    <input type="checkbox" name="bookmark" id="savebtn" value="1">
                                    <label for="savebtn"></label>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div><br>
            <div class="content-body">
                <div class="embed-responsive embed-responsive-4by3" data-purpose="curriculum-item-viewer-content">
                    <iframe src="/ViewerJS/#..{{ ('/data_file/files/'.$content->file) }}" class="embed-responsive-item" frameborder="0" allowfullscreen webkitallowfullscreen></iframe>
                </div>
            </div>
            
            <div class="content-dashboard">
                <div class="app-row-content">
                    <div class="app-dashboard-content">
                        <div class="dashboard-wrapper">
                            <div class="dashboard-navbar">
                                <div class="dashboard-tabs-container">
                                    <button class="tablink" onclick="openPage('Deskripsi', this, '#F8FAFC')" id="defaultOpen"><strong>Deskripsi</strong></button>
                                    <button class="tablink" onclick="openPage('Penjabaran', this, '#F8FAFC')"><strong>Penjelasan</strong></button>
                                    <button class="tablink" onclick="openPage('TJ', this, '#F8FAFC')"><strong>Komentar</strong></button>
                                    <button class="tablink" onclick="openPage('Video', this, '#F8FAFC')"><strong>Video</strong></button>
                                </div>
                            </div>
                            <div class="dashboard-content">
                                <div id="Deskripsi" class="tabcontent">
                                    <span>Dibuat oleh: {{$content->user->firstname}} {{$content->user->lastname}}</span>
                                        <small>Kategori: <strong>{!! $content->category !!}</strong></small>
                                        <small>Tag: <strong>{!! $content->tag !!}</strong></small><br>
                                        <div class="sharethis-inline-share-buttons" style="float:left"></div><br><br>
                                    <hr>
                                    <h4>Deskripsi Konten</h4>
                                    @if (empty($content->description))
                                        <p>Tidak ada deskripsi</p>
                                    @else
                                        <p>{!! $content->description !!}</p>
                                    @endif
                                </div>

                                <div id="Penjabaran" class="tabcontent">
                                    <div class="col-md-10" style="padding:0;" id="penjabaran-wrapper">
                                        <h4>{!! $content->title !!}</h4><hr>
                                        <p>{!! $content->body !!} </p>
                                    </div>
                                </div>
                                    
                                <div id="TJ" class="tabcontent" style="color:black">
                                    <div class="col-md-10" style="padding:0;" id="tj-wrapper">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>Silahkan beri komentar atau pertanyaan disini</h4>
                                                <form method="post" action=" {{ route('content.comment') }} " id="comment" name="comment" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="textarea" name="comment_body" class="form-control" style="height:50px;"/>
                                                        <input type="hidden" name="content_id" value="{{ $content->id }}" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-warning" value="Submit" />
                                                    </div>
                                                </form><br><hr>
                                                <h4>Komentar dan pertanyaan</h4><br>
                                                @if (count($comments)==0)
                                                    <p>Belum ada komentar atau pertanyaan</p>
                                                @else
                                                    @foreach($comments as $comment)
                                                        <div class="display-comment">
                                                            <strong style="font-size:18px;">{{ $comment->username }}</strong>
                                                            @if (!empty($comment->parent_username))
                                                                <p style="margin:0;font-size:12px;">Kepada: <strong>{{$comment->parent_username}}</strong></p>
                                                            @endif
                                                            <p style="margin:0;font-size:15px;padding-top:5px;">{{ $comment->body }}</p>
                                                            <br>
                                                            <div class="reply-comment">
                                                                <form method="post" action="{{ route('content.reply_comment') }}">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <input type="text" name="comment_body" class="form-control"/>
                                                                        <input type="hidden" name="content_id" value="{{ $content->id }}" />
                                                                        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                                                                        <input type="hidden" name="parent_username" value="{{ $comment->username }}" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="submit" class="btn btn-warning" value="Balas" />
                                                                    </div>
                                                                </form>
                                                            </div><hr>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Video" class="tabcontent">
                                    <h4>Video Konten</h4><hr>
                                    @if (!empty($content->video))
                                        <div id="video-wrapper" class="embed-responsive embed-responsive-16by9">
                                            <iframe src="{!! $content->video !!}" frameborder="0" class="embed-responsive-item" allowfullscreen></iframe>
                                        </div>
                                    @else
                                        <p>Tidak ada video pada konten ini</p>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <hr>
                                <div class="created-at">
                                    <small>Dibuat pada: {{ $content->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#clicktorate').on('click', function(event) {
                jQuery('.give-rating').toggle('show');
            });
            jQuery('#reply').on('click', function(event) {
                jQuery('.reply-comment').toggle('show');
            });
        });

        //tab dashboard default open
        document.getElementById("defaultOpen").click();
        
        // bookmark check uncheck display
        var book = {{ round($bookmarked) }};
        if (book !== 0) {
            document.getElementById("savebtn").checked = true;
            document.getElementById("save_text").innerHTML = "Terima kasih anda telah menyimpan konten ini Silahkan lihat "+"<a href='/saved-content/{{ Auth::user()->username }}'>di sini! </a>";

        }

        //bookmark save
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
                document.getElementById("save_text").innerHTML = "Terima kasih anda telah menyimpan konten ini Silahkan lihat "+"<a href='/saved-content/{{ Auth::user()->username }}'>di sini! </a>";
            }else{
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
                document.getElementById("save_text").innerHTML = "Tekan logo di samping untuk bookmark atau menyimpan konten ini!";
            }
        });
        
        function inputrating() {
            var contentRate = {{round($content_rating)}};
            var rating = $('#rating');
            $('input[type=radio]').click(function(e) {
                var value = $(this).val();
                $.ajax({
                    url: "{{ route('content.rating') }}",
                    method: 'POST',
                    data: rating.serialize(),
                    success: function(){
                        alert( "Berhasil memberikan rating");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Some error..");
                    }
                });
                $("#userVal").html(contentRate);
                $("#userRat").html(value);
                $('.rating-user-wrapper').hide();
                $( ".is-rating-user" ).show();
            });
        };
        
        window.onload = () => {
            let totalSeconds = document.getElementById("seconds").value;
            let intervalId = null;
            
            intervalId = setInterval(startTimer, 1000);
            function startTimer() {
                document.getElementById("seconds").value = ++totalSeconds;
            }
            
            var ratings = {{$ratings}};
            if (ratings == 0) {
                alert ("JANGAN LUPA MEMBERIKAN RATING PADA KONTEN INI!");
            }
            var contentRate = {{round($content_rating)}};
            var rate = {{round($ratings)}};
            radiobtn = document.getElementById(rate);
            radiobtn.checked = true;

            //get hide and show user rating
            var userRat = {{$ratings}};
            var ratinguserwrapper = $("#rating-user-wrapper");
            var isratinguser = $("#is-rating-user");
            if (userRat !== null) {
                $("#rating-user-wrapper").hide();  
                $("#is-rating-user").show();
            } else {
                $("#is-rating-user").hide();
                $("#rating-user-wrapper").show();
            }

        };
        
        //save stopwatch
        window.onunload = function() {
            let $time_spent = $('#timespent');
            $.ajax({
                url:"{{ route('content.timespent')}}",
                method:'POST',
                data: $time_spent.serialize()
            });
        };
        
        //count selection
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
        
        //tab dashboard
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
        
        $(document).ready(inputrating);

    </script>
@endsection