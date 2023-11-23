@extends('layouts.main')

@section('content')
  <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">thumb</th>
        <th scope="col">price</th>
        <th scope="col">series</th>
        <th scope="col">sale_date</th>
        <th scope="col">type</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->thumb }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            </tr>
        @endforeach

    </tbody>
  </table>
@endsection
