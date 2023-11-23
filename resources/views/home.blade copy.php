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
                <div class="buttons-container">
                    <a href=""><button class="btn"><i class="fa-solid fa-plus"></i> More info</button></a>
                    <a href=""><button class="btn"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>

@endsection
