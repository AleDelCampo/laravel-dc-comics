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

    <div class="mt-4 mb-4">
        <a href="{{route('comics.create')}}" class="btn btn-primary">Inserisci il tuo fumetto preferito!!</a>
    </div>
</div>
@endsection
