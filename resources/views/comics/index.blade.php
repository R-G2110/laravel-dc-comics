@extends('layouts.main')

@section('content')
    <h1>Lista prodotti</h1>
    <div class="cards-wrapper">
    @foreach ($comics as $comic)

    <div class="card">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        <div class="overlay">
            <div class="comic-info">
                <h4>{{ $comic->title }}</h4>
                <h6>{{ $comic->type }}</h6>
                <h5>{{ $comic->price }}</h5>
                <div class="buttons-container">
                    <a href="{{ route('comics.show', $comic->id) }}"><button class="btn"><i class="fa-solid fa-plus"></i> More info</button></a>
                    <a href=""><button class="btn"><i class="fa-solid fa-pen"></i> Edit product</button></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>

@endsection
