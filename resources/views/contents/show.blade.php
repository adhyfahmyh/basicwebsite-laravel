@extends('layouts.app')

@section('content')
    <div class="column-container">
        <div class="content-column">
            <div>
                <a href="/contents"><button class="btn btn-warning" style="font-weight:bolder;">Kembali</button></a>
            </div>
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
                    <div class="rating-overall">
                        <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="content rating star">
                        <strong><span id="ratVal" itemprop="ratingValue">{{round($content_rating)}}</span></strong>
                        <span class="grey">/10</span>
                    </div>
                    <div class="rating-user">
                        <div class="give-rating">
                            <form action="{{ route('content.rating') }}" method="POST" id="rating" name="rating" enctype="multipart/form-data">
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
                        <button id="clicktorate">
                            <div class="rwrapper">
                                <div class="rating-user-wrapper" id="rating-user-wrapper">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="user rating star">
                                    <p>Berikan</p>
                                    <p>Rating</p>
                                </div>
                                <div class="is-rating-user" id="is-rating-user">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=" alt="content rating star">
                                    <strong><span id="userRat" itemprop="userRating">{{round($ratings)}}</span></strong>
                                    <span><small>oleh Anda</small></span>
                                </div>
                            </div>
                        </button>
                    </div>    
                </div>
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
                                        <small>Kategori: <strong>{!! $content->category !!}</strong></small>
                                        <small>Tag: <strong>{!! $content->tag !!}</strong></small>
                                    <hr>
                                    <h4>Deskripsi Konten</h4>
                                    @if (empty($content->description))
                                        <p>Tidak ada deskripsi</p>
                                    @else
                                        <p>{!! $content->description !!}</p>
                                    @endif
                                </div>
                                    
                                <div id="Penjabaran" class="tabcontent col-md-10 offset-md-1">
                                    <h4>Penjabaran Materi</h4>
                                    <p>{!! $content->body !!} </p> 
                                </div>
                                    
                                <div id="TJ" class="tabcontent">
                                    <div class="col-md-10 offset-md-1" style="padding:0;">
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
                                                    <p>Tidak ada komentar atau pertanyaan</p>
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
                                                                        <input type="text" name="comment_body" class="form-control" style="width:500px"/>
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
                                    <h4>Video Konten</h4>
                                    @if (!empty($content->video))
                                        <iframe src="{!! $content->video !!}" frameborder="0" width="854px" height="480px" allowfullscreen></iframe>
                                    @else
                                        <p>Video tidak tersedia</p>
                                    @endif
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
        
        //save stopwatch and bookmark zero
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