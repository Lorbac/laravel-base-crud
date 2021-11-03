@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="m-3 text-center">{{ $comic["title"] }}</h1>
            <ul>
                <li>{!! $comic["description"] !!}</li>
                <li>Prezzo: {{ $comic["price"] }}€</li>
                <li>Data: {{ $comic["sale_date"] }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection