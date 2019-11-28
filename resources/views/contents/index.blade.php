@extends('layouts.app')

@section('content')
    {{-- <button id="create-content" onclick="window.location.href='/contents/create'">
        <h4>Buat Konten</h4>
    </button> --}}
    <div>
        <h2 class="text-center">Konten Pembelajaran</h2>
        <div class="text-center" style="background-color:#ffff99; border-radius:5px;">
            <p class="mb-0">Silahkan pilih konten pembelajaran yang anda butuhkan</p>
            <p>Gunakan fitur pencarian yang ada diatas, atau pilih kategori maupun urutkan konten berdasarkan kebutuhan anda</p>
        </div>
    </div>
        <div class="filter">
            <form action="/contents" method="GET">
                <div class="row" id="filterContent">
                    <div class="col-md-8">
                        @if (isset($category))
                            <div class="col-md-4">
                                <label for="reset" style="margin:0"><p>Hasil untuk kategori: <b>{{ $category }}</b></p></label>
                                <input type="button" value="Reset" name="reset" onclick="window.location.href='/contents'" style="display:block;font-weight:bolder;" class="btn btn-warning">
                            </div>
                        @elseif (isset($sortBy))
                            <div class="col-md-4">
                                <label for="reset" style="margin:0"><p>Urut Berdasarkan: <b>
                                <?php
                                    if ($sortBy=="total_selection"){
                                        echo "Popularitas";
                                    }
                                    if ($sortBy=="rating") {
                                        echo "Rating";
                                    }
                                ?>
                                </b></p></label>
                                <input type="button" value="Reset" name="reset" onclick="window.location.href='/contents'" style="display:block;font-weight:bolder;" class="btn btn-warning">
                                {{-- <button type="reset" onclick="window.location.href='/contents'" name="reset">Reset</button> --}}
                            </div>
                        @elseif (isset($search))
                            <div class="col-md-4">
                                <label for="reset" style="margin:0"><p>Hasil pencarian: <b>{{ $search }}</b></p></label>
                                <input type="button" value="Reset" name="reset" onclick="window.location.href='/contents'" style="display:block;font-weight:bolder;" class="btn btn-warning">
                            </div>
                        @endif
                    </div>
                    
                    <div class="col-md-2 col-3">
                        <label for="category">Pilih Kategori</label>
                        <select name="category" class="form-control form-control-sm" value="{{$category}}" onchange="submit()">
                            <option value="" selected disabled hidden> Pilih</option>
                            <option value="Membaca Teks Nonsastra">Membaca Teks Nonsastra</option>
                            <option value="Membaca Teks Sastra">Membaca Teks Sastra</option>
                            <option value="Menulis Teks Nonsastra">Menulis Teks Nonsastra</option>
                            <option value="Menulis Teks Sastra">Menulis Teks Sastra</option>
                            <option value="Ciri dan Struktur Teks">Ciri dan Struktur Teks</option>
                            <option value="Kebahasaan dalam Teks">Kebahasaan dalam Teks</option>
                        </select>
                    </div>
    
                    <div class="col-md-2 col-3">
                        <label for="sortyBy">Urutkan Berdasarkan</label>
                        <select name="sortBy" class="form-control form-control-sm" value="{{$sortBy}}" onchange="submit()">
                            <option value="" selected disabled hidden>Pilih</option>
                            <option value="total_selection">Popularitas</option>
                            <option value="rating">Rating</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    <hr>
    <div class="card-wrapper">
        @if(count($contents) > 0)
            @foreach($contents as $content)
                <div class="card-deck">
                    <a href="/contents/{{$content->id}}">
                    <div class="card">
                        @if (empty($content->content_img))
                            <img src="https://www.litmos.com/wp-content/uploads/2016/06/blog-eLearning-templates.png" alt="post_image" class="card-img">
                        @else
                            <img src="{{ url('/data_file/images/'.$content->content_img) }}" alt="post_image" class="card-img">
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{$content->title}}</h4>
                            <hr>
                            <div class="text-card">
                                @if (empty($content->description))
                                    <p class="card-text"><small>Tidak ada deskripsi</small></p>
                                @else
                                    <p class="card-text"><small>{{$content->description}}</small></p>
                                @endif
                                
                            </div><br>
                            <div class="rating-card">
                                <img id="rating" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUzLjg2NyA1My44NjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUzLjg2NyA1My44Njc7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8cG9seWdvbiBzdHlsZT0iZmlsbDojRUZDRTRBOyIgcG9pbnRzPSIyNi45MzQsMS4zMTggMzUuMjU2LDE4LjE4MiA1My44NjcsMjAuODg3IDQwLjQsMzQuMDEzIDQzLjU3OSw1Mi41NDkgMjYuOTM0LDQzLjc5OCAgIDEwLjI4OCw1Mi41NDkgMTMuNDY3LDM0LjAxMyAwLDIwLjg4NyAxOC42MTEsMTguMTgyICIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                                @if (empty($content->rating))
                                    <p id="ratVal"><small>belum ada rating</small> </p>
                                @else
                                    <p id="ratVal"> {{$content->rating}} <small>/10</small> </p>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer" style="text-align:left;">
                            <small class="text-muted" style="position:relative;text-align:left;">Dibuat pada: {{date('d-m-Y', strtotime($content->created_at))}}</small>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
            {{$contents->links()}}
        @else
            <br><br>
            <p>Tidak ada konten yang ditemukan</p>
        @endif
    </div>
@endsection