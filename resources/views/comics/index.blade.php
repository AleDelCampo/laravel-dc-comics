@extends('layouts.app')

@section('content')

<div id="comic-container">
    @foreach($comics as $comic)
    <a href="{{route('comics.show', $comic->id)}}" class="comic-link">
        <div class="comic">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h5>{{ $comic['title'] }}</h5>
        </div>
    </a>
    @endforeach

    <div>
        <button id="load-btn" class="pointer">
            LOAD MORE
        </button>
    </div>
</div>
@endsection
