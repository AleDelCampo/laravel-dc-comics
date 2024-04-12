@extends('layouts.app')

@section('content')
<div id="comic-container">
    
    @foreach($comics as $comic)
    <div>
        <a href="{{route('comics.show', $comic->id)}}" class="comic-link">
            <div class="comic">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h5>{{ $comic['title'] }}</h5>
            </div>
        </a>
        
    </div>
    @endforeach
    
</div>
<div class="d-flex justify-content-center my-bg">
    <a href="{{route('comics.create')}}" class="btn btn-primary mb-4">Inserisci il tuo fumetto preferito!!</a>
</div>
@endsection
