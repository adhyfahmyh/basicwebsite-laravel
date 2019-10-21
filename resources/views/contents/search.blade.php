@extends('layouts.app')

@section('content')
    <hr>
    <div>
        @if(count($contents) > 0)
            @foreach($contents as $content)
                {{-- <div class="card-deck">
                    <a href="/contents/{{$content->id}}">
                    <div class="card">
                        <img src="{{ url('/data_file/images/'.$content->content_img) }}" alt="post_image" class="card-img">
                        <div class="card-body">
                            <h4 class="card-title">{{$content->title}}</h4>
                            <hr>
                            <p class="card-text"><small>{{$content->description}}</small></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted" style="position:relative">Last updated {{$content->updated_at}}</small>
                        </div>
                    </div>
                    </a>
                </div> --}}
                {{ $content->id }}
                {{ $content->title }}
            @endforeach
            {{-- {{$contents->links()}} --}}
        @else
            <p>NO POST FOUND</p>
        @endif
    </div>
@endsection