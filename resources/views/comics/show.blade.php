@extends('layouts.main')

@section('content')
    <main class="wrap-home mt-1">
        {{-- HERO --}}
        <section class="hero" style="background-image: url({{ $comic['image-hero'] }})">
            <div class="container">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>
        {{-- COMIC DETAIL --}}
        <section class="detail-comic mt-2 mb-2">
            <div class="container">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price">{{ $comic['price'] }}</div>
                <div class="text">{!! $comic['body'] !!}</div>
            </div>
        </section>
    </main>
@endsection