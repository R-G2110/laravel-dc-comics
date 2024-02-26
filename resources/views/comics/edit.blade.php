@extends('layouts.main')

@section('content')
    <h1>Product modify</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Type" name="type" value="{{ $comic->type }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Series" name="series" value="{{ $comic->series }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Sale date" name="sale-date" value="{{ $comic->sale_date }}">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Image" name="thumb" value="{{ $comic->thumb }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <textarea name="description" id="description" placeholder="Description" cols="100" rows="25" >{{ $comic->description }}</textarea>
            </div>
        </div>
        <button class="btn" type="submit">Submit</button>
        <button class="btn" type="reset">Reset</button>
    </form>


@endsection
