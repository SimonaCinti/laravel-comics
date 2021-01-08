@extends('layouts.main')

@section('content')
    <main class="wrap-home mt-1">
        <section class="hero">
            <div class="container">
                <img src="{{ asset('img/cover-home.jpg') }}" alt="cover-hero">
            </div>
        </section>
        <section class="comics mt-2 mb-2">
            <div class="container">
                <ul class="comic-list">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['id']) }}">
                                <img src="{{$comic['image']}}" alt="cover comic">
                                <h3>{{$comic['title']}}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection