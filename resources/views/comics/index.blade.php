@extends('layouts.app')

@section('content')

<section>
  <div class="container">
    <div class="comics__box">
      <a class="comics__add" href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
    </div>

    <div class="comics__grid">
      @foreach ($comics as $comic)
        <div class="comic__card">
          <a href="{{ route('comics.show', $comic) }}">
            <div class="comics__preview">
              <img src={{ $comic->thumb }}>

              <h3>Titolo: {{ $comic->title }}</h3>
            </div>
          </a>
          <a class="comics__edit" href="{{ route('comics.edit', $comic) }}">Modifica</a>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection