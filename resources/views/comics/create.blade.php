@extends('layouts.app')

@section('content')

<div class="container">
  <h2>
    Aggiungi un nuovo fumetto
  </h2>
</div>

<div class="container">
  <form action="{{ route('comics.store') }}" method="POST"> @csrf

    <p>
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" placeholder="Titolo Fumetto">
    </p>

    <p>
      <label for="description">Descrizione</label>
      <textarea name="description" id="description" placeholder="Descrizione">
      </textarea>
    </p>

    <p>
      <label for="thumb">Indirizzo Immagine</label>
      <input type="text" name="thumb" id="thumb" placeholder="Indirizzo Immagine">
    </p>

    <p>
      <label for="price">Prezzo</label>
      <input type="number" name="price" id="price" placeholder="Prezzo">
    </p>

    <p>
      <label for="series">Serie</label>
      <input type="text" name="series" id="series" placeholder="Serie">
    </p>

    <p>
      <label for="date">Data di Pubblicazione</label>
      <input type="text" name="sale_date" id="date" placeholder="Data di Pubblicazione">
    </p>

    <p>
      <label for="type">tipo</label>
      <input type="type" name="type" id=type placeholder="Tipo">
    </p>

    <p>
      <input type="submit" value="Salva">
    </p>

  </form>
</div>