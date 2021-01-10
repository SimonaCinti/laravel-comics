@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        {{-- HERO --}}
        <section class="hero">
            <div class="container sm">
                <img src="{{ asset('img/cover-home.jpg') }}" alt="cover-hero">
                <h2>Current Series</h2>
            </div>
        </section>
        {{-- Comic Gallery --}}
        <section class="comics pt-1">
            <div class="container">
                <ul class="comic-list">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['slug']) }}">
                                <img src="{{$comic['image']}}" alt="cover comic">
                                <h3 class="pt-1 pb-2">{{$comic['title']}}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="flex justify-center pb-1">
                    <a href="/">
                        <div class="btn load">
                            <small>Load More</small>        
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="main-submenu mb-4">
            <div class="container">
                <ul class="flex justify-around">
                    <li>
                        <img src="../img/digital-comics.png" alt="digital">
                        <p>Digital comics</p>
                    </li>
                    <li>
                        <img src="../img/merchandise.png" alt="merchandise">
                        <p>Dc merchandise</p>
                    </li>
                    <li>
                        <img src="../img/subscriptions.png" alt="subscript">
                        <p>subscriptions</p>
                    </li>
                    <li>
                        <img src="../img/shop-locator.png" alt="shop">
                        <p>comic shop locator</p>
                    </li>
                    <li>
                        <img src="../img/power-visa.svg" alt="visa">
                        <p>dc power visa</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection