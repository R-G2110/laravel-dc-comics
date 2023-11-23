@extends('layouts.main')

@section('content')

  <h1>Benvenuto!</h1>
  <h3>Attualmente abbiamo {{ $num_comics }} prodotti nel nostro database.</h3>
    <button class="btn insert-btn">Insert Product</button>

@endsection
