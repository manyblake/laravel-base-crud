@extends('layouts.app')

@section('content')

<section>
  <div class="container" style="display: flex; justify-content: flex-end;">
    <a href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
  </div>
</section>

@foreach ($comics as $comic)
  <a href="{{ route('comics.show', $comic) }}">
    <div>
      <h3>Titolo: {{ $comic->title }}</h3>

      <img src={{ $comic->thumb }}>
      <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
    </div>
  </a>
@endforeach