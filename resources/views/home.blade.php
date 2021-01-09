@extends('layouts.main')

@section('content')
    <main class="wrap-home">
        {{-- HERO --}}
        <section class="hero">
            <div class="container">
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
            </div>
        </section>
    </main>
@endsection