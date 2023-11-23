@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <div class="cards-wrapper show">

    <div class="card">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

    </div>
    <div class="comic-info-show">
        <ul>
            <li>
                <h2>Title: {{ $comic->title }}</h2>
            </li>
            <li>
                <h3>{{ $comic->type }}</h3>
            </li>
            <li>
                <h3>Series: {{ $comic->series }}</h3>
            </li>
            <li>
                <h3>Price: {{ $comic->price }}</h3>
            </li>
            <li>
                <h3>Sale date: {{ $comic->sale_date }}</h3>
            </li>
            <li>
                <h3>Description:</h3>
                <p>{{ $comic->description }}</p>
            </li>
            <li>
                <a href="{{ route('comics.index') }}"><button class="btn back-btn">Back</button></a>
            </li>
        </ul>


    </div>

  </div>

@endsection
