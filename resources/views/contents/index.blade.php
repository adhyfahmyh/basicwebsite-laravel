@extends('layouts.app')

@section('content')
    {{-- <button id="create-content" onclick="window.location.href='/contents/create'">
        <h4>Buat Konten</h4>
    </button> --}}
    <div>
        <h2 class="text-center">Konten Pembelajaran</h2>
    </div>
        @if (isset($search))
        <div>
            <p>Hasil pencarian: <b>{{ $search }}</b></p>
            <button type="reset" onclick="window.location.href='/contents'">Reset</button>
        </div>
        @endif
    <hr>
    <div>
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