@extends('layouts.main')

@section('content')
    <h1>Lista prodotti</h1>

    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
    @endif

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
                            @include('partials.infoButton')
                            <a href="{{ route('comics.edit', $comic) }}"><button class="btn"><i class="fa-solid fa-pen"></i> Edit</button></a>
                            @include('partials.deleteButton')
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="navigator">
        {{$comics->links()}}
    </div>

@endsection
