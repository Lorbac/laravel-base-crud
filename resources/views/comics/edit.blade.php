@extends('layouts.app')

@section('content')
    <div class="container w-50">
        <form action="{{ route("comics.update", $comic["id"]) }}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group mt-2">
                <label for="title">Title</label>
                <input value="{{ $comic["title"] }}" type="text" name="title" class="form-control" id="title"  placeholder="Enter the comic's name">
            </div>
            <div class="form-group mt-2">
                <label for="description">Description</label>
                <input value="{{ $comic["description"] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter the description">
                </div>
            <div class="form-group mt-2">
                <label for="price">Price</label>
                <input value="{{ $comic["price"] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter the price">
            </div>
            <div class="form-group mt-2">
                <label for="thumb">Image</label>
                <input value="{{ $comic["thumb"] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter the thumb">
            </div>
            <div class="form-group mt-2">
                <label for="series">Series</label>
                <input value="{{ $comic["series"] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter the series">
            </div>
            <div class="form-group mt-2">
                <label for="sale_date">Sale Date</label>
                <input value="{{ $comic["sale_date"] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter the sale date">
            </div>
            <div class="form-group mt-2">
                <label for="type">Type</label>
                <input value="{{ $comic["type"] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter the type">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection