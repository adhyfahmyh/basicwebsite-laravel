@extends('layouts.app')

@section('content')
    {{-- @if(count($created_contents) > 0)
        @foreach($created_contents as $created_content)
            <div class="card-deck" style="margin-top:20px;margin-bottom:5px;width:30%;">
                <a href="/contents/{{$created_content->id}}">
                <div class="card" style="margin:0;width:95%;">
                    @if (empty($created_content->content_img))
                        <img src="https://www.litmos.com/wp-content/uploads/2016/06/blog-eLearning-templates.png" alt="post_image" class="card-img">
                    @else
                        <img src="{{ url('/data_file/images/'.$created_content->content_img) }}" alt="post_image" class="card-img">
                    @endif
                    <div class="card-body">
                        <p class="card-title">{{$created_content->title}}</p>
                        <hr>
                        <div class="text-card">
                            @if (empty($created_content->description))
                                <p class="card-text"><small>Tidak ada deskripsi</small></p>
                            @else
                                <p class="card-text"><small>{{$created_content->description}}</small></p>
                            @endif
                            
                        </div><br>
                        <div class="rating-card">
                            <img id="rating" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                            @if (empty($created_content->rating))
                                <p id="ratVal" style="font-size:15px"><small style="font-size:8px">belum ada rating</small> </p>
                            @else
                                <p id="ratVal" style="font-size:15px"> {{$created_content->rating}} <small style="font-size:8px">/10</small> </p>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted" style="position:relative">Dibuat pada: {{date('d-m-Y', strtotime($created_content->created_at))}}</small>
                    </div>
                </div>
                </a>
            </div>
        @endforeach
        {{ $created_contents->links() }}        
    @else
        <div class="col-md-12" style="text-align:center;">
            <br><br><br><br><br>
            <h3>Tidak ada konten yang anda buat</h3>
        </div>
    @endif --}}
    
    <div class="container-fluid">
        @include('inc.sidebar-profile')
        <div class="content">
            @if(count($created_contents) > 0)
                @foreach($created_contents as $created_content)
                <div class="card mb-3">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            @if (empty($created_content->content_img))
                                <img src="https://www.litmos.com/wp-content/uploads/2016/06/blog-eLearning-templates.png" alt="post_image" class="card-img-top" height="255">
                            @else
                                <img src="{{ url('/data_file/images/'.$created_content->content_img) }}" alt="post_image" class="card-img-top" height="255">
                            @endif
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $created_content->title }}</h3>
                                @if (empty($created_content->description))
                                    <p class="card-text"><small>Tidak ada deskripsi</small></p>
                                @else
                                    <p class="card-text"><small>{{$created_content->description}}</small></p>
                                @endif
                                @if (empty($created_content->rating))
                                    <p class="mb-0">
                                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" height="25"/>
                                        <small>belum ada rating</small>
                                    </p>
                                @else
                                    <p class="mb-0">
                                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" height="25"/>
                                        {{ $created_content->rating }}
                                        <small>/10</small>
                                    </p>
                                @endif
                            </div>
                            <div class="card-footer" style="background:none; border:none;">
                                <a href="/contents/{{$created_content->id}}" class="btn btn-success stretched-link col-md-12">Pelajari</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Dibuat pada: {{date('d-m-Y', strtotime($created_content->created_at))}}</small>
                            </div>
                          </div>
                        </div>
                      </div>
                @endforeach
                {{ $created_contents->links() }}        
            @else
                <div class="col-md-12" style="text-align:center;">
                    <br><br><br><br><br>
                    <h3>Tidak ada konten yang anda buat</h3>
                </div>
            @endif
        </div>
    </div>
@endsection