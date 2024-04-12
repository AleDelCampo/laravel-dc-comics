@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Inserisci il tuo comic/manga preferito</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf

        @method("PUT")

        <div class="mb-2">
          <label for="title" class="form-label">Titolo: </label>
          <input type="text" class="form-control" id="title" value="{{ $comic->title }}" name="title" required>
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea type="text" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
        </div>

        <div class="mb-2">
            <label for="thumb" class="form-label">Copertina: </label>
            <input type="text" class="form-control" id="thumb" value="{{ $comic->thumb }}" name="thumb">
        </div>

        <div class="mb-2">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control" id="price" value="{{ $comic->price }}" name="price">
        </div>

        <div class="mb-2">
            <label for="series" class="form-label">Categoria: </label>
            <input type="text" class="form-control" id="series" value="{{ $comic->series }}" name="series">
        </div>

        <div class="mb-2">
            <label for="sale_date" class="form-label">Data d'uscita: </label>
            <input type="text" class="form-control" id="sale_date" value="{{ $comic->sale_date }}" name="sale_date">
        </div>

        <div class="mb-2">
            <label for="type" class="form-label">Genere: </label>
            <input type="text" class="form-control" id="type" value="{{ $comic->type }}" name="type">
        </div>

        <button type="submit" class="btn btn-primary">Registra!!</button>

    </form>
</div>

@endsection