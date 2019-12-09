@extends('layouts.app')

@section('content')
    <div class="heading-contents">
        <h2 class="text-center">Rekomendasi Konten Pembelajaran</h2>
    </div>
    <hr>
    @if (count($contentRecommendation)>0)
        <ol class="steps">
            @foreach ($contentRecommendation as $recommendation)
                <li>
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            @if (empty($recommendation->content_img))
                                <img src="https://www.litmos.com/wp-content/uploads/2016/06/blog-eLearning-templates.png" alt="post_image" class="card-img-top" height="250">
                            @else
                                <img src="{{ url('/data_file/images/'.$recommendation->content_img) }}" alt="post_image" class="card-img-top" height="250">
                            @endif
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $recommendation->title }}</h3><hr>
                                @if (empty($recommendation->description))
                                    <p class="card-text"><small>Tidak ada deskripsi</small></p>
                                @else
                                    <p class="card-text"><small>{{$recommendation->description}}</small></p>
                                @endif
                                @if (empty($recommendation->rating))
                                    <p class="mb-0">
                                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" height="23"/>
                                        <small>belum ada rating</small>
                                    </p>
                                @else
                                    <p class="mb-0">
                                        <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" height="23"/>
                                        {{ $recommendation->rating }}
                                        <small>/10</small>
                                    </p>
                                @endif
                            </div>
                            <div class="card-footer" style="background:none; border:none;">
                                    <a href="/contents/{{$recommendation->id}}" class="btn btn-success stretched-link col-md-12">Pelajari</a>
                                </div>
                            <div class="card-footer">
                                <small class="text-muted">Dibuat pada: {{date('d-m-Y', strtotime($recommendation->created_at))}}</small>
                            </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>
    @else
        <h3 class="text-center">Belum ada rekomendasi</h3>
    @endif
    {{-- {{ $response }}
    {{ $err }} --}}
    {{-- <h1>response</h1>
    {{$response}}
    <h2>json</h2>
    {{$json}}
    
    @foreach($recommendationw as $recommendation)
        ID: {{ $recommendation['id'] }}
        Gambar: {{ $recommendation['content_img'] }}
        Judul: {{ $recommendation['title'] }}
        Deskripsi: {{ $recommendation['description'] }}
        Rating: {{ $recommendation['rating'] }}

        Created at: {{ $recommendation['created_at'] }}
    @endforeach --}}
@endsection