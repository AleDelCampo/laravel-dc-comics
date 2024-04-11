@extends('layouts.app')

@section('content')
@include('comics/jumbobonus')
    <div class="container py-4">
        <h1>{{ $comic->title }}</h1>

        <p>
            {{ $comic->description }}
        </p>

        <img src="{{ $comic->thumb }}" alt="">
    </div>
@endsection