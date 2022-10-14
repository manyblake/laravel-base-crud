@extends('layouts.app')

@section('content')

<section>
<div class="container">
    <h3>Titolo: {{ $comic->title }}</h3>
    <p>Descrizione: {{ $comic->description }}</p>
    <img src={{ $comic->thumb }}>
    <p>Prezzo: {{ $comic->price }}</p>
    <p>Serie: {{ $comic->series }}</p>
    <p>Data di pubblicazione: {{ $comic->sale_date }}</p>
    <p>Tipo: {{ $comic->type }}</p>
</div>
</section>

@endsection