@extends('layouts.main')

@section('content')
    <h1>Product insertion</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Type" name="type" value="{{ old('title') }}">
            </div>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Series" name="series">
            </div>
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Sale date" name="sale-date">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Image" name="thumb">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <textarea name="description" id="description" placeholder="Description" cols="100" rows="25"></textarea>
            </div>
        </div>
        <button class="btn" type="submit">Submit</button>
        <button class="btn" type="reset">Reset</button>
    </form>


@endsection
