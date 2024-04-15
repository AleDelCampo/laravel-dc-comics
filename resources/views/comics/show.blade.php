@extends('layouts.app')

@section('content')
@include('comics/jumbobonus')

<div class="container py-4 d-flex">
    <div>
        <h1>{{ $comic->title }}</h1>

        <p>
            {{ $comic->description }}

            <br>

            <span>
                {{ $comic->price }}
            </span>
        </p>

        <img src="{{ $comic->thumb }}" alt="">

        

        <div>
            Artisti: {{ $comic['artists'] }}
            <br>
            Scrittori: {{ $comic['writers'] }}
        </div>

    </div>

    

    <div>
        <a class="btn btn-success fw-bold border-black" href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pencil"></i> Modificalo!!</a>
        <button type="button" class="btn btn-danger fw-bold border-black" id="destroyComicBtn"><i class="fa-solid fa-trash-can"></i> Distruggi Fumetto</button>
    </div>
</div>

<form id="destroyComicForm" action="{{route('comics.destroy', $comic->id)}}" method="POST" style="display: none;">
    @method('DELETE')
    @csrf
</form>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let destroyComicBtn = document.getElementById('destroyComicBtn');
        let destroyComicForm = document.getElementById('destroyComicForm');
    });

    destroyComicBtn.addEventListener('click', function () {
        let confirmed = confirm("Sei davvero sicuro di voler distruggere {{ $comic->title }}?");
        if (confirmed) {
            destroyComicForm.submit();
        }
    });
</script>

@endsection

