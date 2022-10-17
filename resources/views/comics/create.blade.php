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
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="description">Descrizione</label>
      <textarea name="description" id="description" placeholder="Descrizione">
      </textarea>
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="thumb">Indirizzo Immagine</label>
      <input type="text" name="thumb" id="thumb" placeholder="Indirizzo Immagine">
      @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="price">Prezzo</label>
      <input type="number" name="price" id="price" placeholder="Prezzo">
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="series">Serie</label>
      <input type="text" name="series" id="series" placeholder="Serie">
      @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="sale-date">Data di Pubblicazione</label>
      <input type="text" name="sale_date" id="sale-date" placeholder="Data di Pubblicazione">
      @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="type">tipo</label>
      <input type="type" name="type" id=type placeholder="Tipo">
      @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <input type="submit" value="Salva">
    </p>

  </form>
</div>