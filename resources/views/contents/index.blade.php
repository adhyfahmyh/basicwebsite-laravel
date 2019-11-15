@extends('layouts.app')

@section('content')
    {{-- <button id="create-content" onclick="window.location.href='/contents/create'">
        <h4>Buat Konten</h4>
    </button> --}}
    <div>
        <h2 class="text-center">Konten Pembelajaran</h2>
        <br>
    </div>
        <div class="filter">
            <form action="/contents" method="GET">
                <div class="row" id="filterContent">
                    <div class="col-md-8">
                        @if (isset($category))
                            <div class="col-md-4">
                                <label for="reset" style="margin:0"><p>Hasil untuk kategori: <b>{{ $category }}</b></p></label>
                                <input type="button" value="Reset" name="reset" onclick="window.location.href='/contents'" style="display:block">
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
                                <input type="button" value="Reset" name="reset" onclick="window.location.href='/contents'" style="display:block">
                                {{-- <button type="reset" onclick="window.location.href='/contents'" name="reset">Reset</button> --}}
                            </div>
                        @elseif (isset($search))
                            <div class="col-md-4">
                                <label for="reset" style="margin:0"><p>Hasil pencarian: <b>{{ $search }}</b></p></label>
                                <input type="button" value="Reset" name="reset" onclick="window.location.href='/contents'" style="display:block">
                            </div>
                        @endif
                    </div>
                    
                    <div class="col-md-2 col-3">
                        <label for="category">Pilih Kategori</label>
                        <select name="category" class="form-control form-control-sm" value="{{$category}}" onchange="submit()">
                            <option value="" selected disabled hidden> Pilih</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                        <img src="{{ url('/data_file/images/'.$content->content_img) }}" alt="post_image" class="card-img">
                        <div class="card-body">
                            <h4 class="card-title">{{$content->title}}</h4>
                            <hr>
                            <p class="card-text"><small>{{$content->description}}</small></p>
                            <p class="card-text"><small>{{$content->rating}}</small></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted" style="position:relative">Last updated {{$content->updated_at}}</small>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
            {{$contents->links()}}
        @else
            <p>NO POST FOUND</p>
        @endif
    </div>
@endsection

    {{-- <ul class="list-group">
                    <li class="list-group-item">
                        <h3><a href="/contents/{{$content->id}}">{{$content->title}}</a></h3>
                        <small>Written on {{$content->created_at}} by {{@$content->user->firstname}}</small>
                    </li>
                </ul> --}}
            {{-- </div> --}}