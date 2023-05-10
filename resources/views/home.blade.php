@extends('layouts.app')


@section('main')
    <main>
        <div class="container">
            @foreach ($dbmain as $card)
            <div class="card-box"  key="index">
                <div class="wrapper">
                <div class="img-wrapper">
                    <img class="series" src="{{ $card['thumb'] }}" alt="title">
                    <div class="price-hover">
                        <div> {{ $card['price'] }}</div>
                    </div>
                </div>
                <div>
                    <div> {{ $card['title'] }}</div>
                    <div> Category : <span class="type">{{ $card['type'] }}</span> </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
@endsection