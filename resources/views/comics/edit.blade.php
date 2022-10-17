@extends('layouts.app')

@section('content')

<div class="container">
  <h2>
  Aggiungi un fumetto
  </h2>
</div>

<div class="container">
  <form action="{{ route('comics.update', $comic) }}" method="POST"> @csrf @method('PUT')

    <p>
      <label for="title">Nome</label>
      <input type="text" name="title" id="title" value="{{old('title', $comic->title)}}" placeholder="Titolo">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="description">Descrizione</label>
      <textarea name="description" id="description" placeholder="Descrizione" value="{{old('description', $comic->description)}}">
      </textarea>
      @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </p>

    <p>
      <label for="thumb">Immagine</label>
      <input type="text" name="thumb" id="thumb" value="{{old('thumb',$comic->thumb)}}" placeholder="Link Immagine">
    </p>

    <p>
      <label for="price">Prezzo</label>
      <input type="number" name="price" id="price" value="{{old('price',$comic->price)}}" placeholder="Prezzo">
    </p>

    <p>
      <label for="series">Serie</label>
      <input type="text" name="series" id="series" value="{{old('series',$comic->series)}}" placeholder="Serie">
    </p>

    <p>
      <label for="sale-date">Data di uscita</label>
      <input type="text" name="sale_date" id="sale-date" value="{{old('sale_date',$comic->sale_date)}}" placeholder="Data di uscita">
    </p>

    <p>
      <label for="type">Tipo</label>
      <input type="text" name="type" id="type" value="{{old('type',$comic->type)}}" placeholder="Tipo">
    </p>

    <p>
      <input type="submit" value="Salva">
    </p>

  </form>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>
      @endforeach
    </ul>
  </div>
  @endif

</div>
@endsection
