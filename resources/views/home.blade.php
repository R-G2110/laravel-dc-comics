@extends('layouts.main')

@section('content')

  <div class="cards-wrapper">
    @foreach ($comics as $comic)

    <div class="card">
        <img src="{{ $comic->thumb }}" alt="">

        <div class="overlay">
            <div class="comic-info">
                <h4>{{ $comic->title }}</h4>
                <h6>{{ $comic->type }}</h6>
                <h5>{{ $comic->price }}</h5>
                <a href=""><button class="btn">More info</button></a>
            </div>
        </div>
    </div>
    @endforeach
  </div>

@endsection
