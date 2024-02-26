@extends('layouts.main')

@section('content')

  <h1>Welcome!</h1>
  <h3>We currently have {{ $num_comics }} products in our database.</h3>
    <button class="btn insert-btn">Insert Product</button>

@endsection
