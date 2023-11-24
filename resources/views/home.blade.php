@extends('layouts.main')

@section('content')

  <h1 class="white">Benvenuto!</h1>
  <h3 class="white">Attualmente abbiamo {{ $num_comics }} prodotti nel nostro database.</h3>
    <button class="btn insert-btn">Insert Product</button>

@endsection
