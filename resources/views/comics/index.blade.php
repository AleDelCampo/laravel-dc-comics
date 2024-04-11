@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Fumetti</h1>

        <table class="table">
        <table class="table mb-4">
            <tbody>
                @foreach ($comics as $comic)

                <tr>
                    <td>{{ $comic->title }} <img class="poster" src="{{ $comic->thumb }}" alt=""></td>
                    <td><a href="{{route('comics.show', $comic->id)}}">Guarda Dettagli!!</a></td>
                </tr>

                @endforeach
            </tbody>
          </table>


        <a href="{{route('comics.create')}}" class="btn btn-primary">Inserisci il tuo fumetto preferito!!</a>

    </div>
@endsection