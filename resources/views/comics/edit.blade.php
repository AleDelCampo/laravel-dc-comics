@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Inserisci il tuo comic/manga preferito</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf

        @method("PUT")

        <div class="mb-2">
          <label for="title" class="form-label">Titolo: </label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') ?? $comic->title }}" name="title" required>
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') ?? $comic->description }}</textarea>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="thumb" class="form-label">Copertina: </label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{ old('thumb') ?? $comic->thumb }}" name="thumb">
            @error('thumb')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') ?? $comic->price }}" name="price" required>
            @error('price')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="series" class="form-label">Categoria: </label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" value="{{ old('series') ?? $comic->series }}" name="series">
            @error('series')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="sale_date" class="form-label">Data d'uscita: </label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}" name="sale_date" required>
            @error('sale_date')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="type" class="form-label">Genere: </label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type') ?? $comic->type }}" name="type">
            @error('type')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrows-rotate"></i> Registra!!</button>

    </form>
</div>

@endsection