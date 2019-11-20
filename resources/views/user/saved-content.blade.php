@extends('layouts.app')

@section('content')
    @if(count($saved_contents) > 0)
        @foreach($saved_contents as $saved_content)
            <div class="card-deck" style="margin-top:20px;margin-bottom:5px;width:30%;">
                <a href="/contents/{{$saved_content->id}}">
                <div class="card" style="margin:0;width:95%;">
                    @if (empty($saved_content->content_img))
                        <img src="https://www.litmos.com/wp-content/uploads/2016/06/blog-eLearning-templates.png" alt="post_image" class="card-img">
                    @else
                        <img src="{{ url('/data_file/images/'.$saved_content->content_img) }}" alt="post_image" class="card-img">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$saved_content->title}}</h5>
                        <hr>
                        <div class="text-card">
                            @if (empty($saved_content->description))
                                <p class="card-text"><small>Tidak ada deskripsi</small></p>
                            @else
                                <p class="card-text"><small>{{$saved_content->description}}</small></p>
                            @endif
                            
                        </div><br>
                        <div class="rating-card">
                            <img id="rating" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                            @if (empty($saved_content->rating))
                                <p id="ratVal" style="font-size:15px"> 0 <small style="font-size:8px">/10</small> </p>
                            @else
                                <p id="ratVal" style="font-size:15px"> {{$saved_content->rating}} <small style="font-size:8px">/10</small> </p>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted" style="position:relative">Dibuat pada: {{date('d-m-Y', strtotime($saved_content->created_at))}}</small>
                    </div>
                </div>
                </a>
            </div>
        @endforeach     
        {{$saved_contents->links()}}   
    @else
        <div class="col-md-12" style="text-align:center;">
            <br><br><br><br><br>
            <h3>Tidak ada konten yang anda simpan</h3>
            <a href="/contents">Lihat konten pembelajaran di sini</a>
        </div>
    @endif
    {{-- {{$saved_contents}} --}}
@endsection