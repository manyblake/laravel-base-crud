@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h3>Titolo: {{ $comic->title }}</h3>
        <img src={{ $comic->thumb }}>
        <p>Descrizione: {{ $comic->description }}</p>
        <p>Prezzo: {{ $comic->price }}</p>
        <p>Serie: {{ $comic->series }}</p>
        <p>Data di pubblicazione: {{ $comic->sale_date }}</p>
        <p>Tipo: {{ $comic->type }}</p>

        <form action=""{{route('comics.destroy', $comic)}} method="POST"> @method('DELETE') @csrf
        <input type="submit" value="Elimina">
        </form>
    </div>
</section>

@endsection