@extends('layouts.main')

@section('content')
    <main class="wrap-home mt-1">
        {{-- HERO --}}
        <section class="hero" style="background-image: url({{ $comic['image-hero'] }})">
            <div class="container sm">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>
        {{-- COMIC DETAIL --}}
        <section class="detail-comic mt-2 mb-2">
            <div class="container sm flex justify-between">
                {{-- Description --}}
                <div class="description">
                    <h1>{{ $comic['title'] }}</h1>
                    <div class="detail flex mb-1">    
                        <div class="price flex justify-between align-center"> 
                            <p> U.S. Price &#xFF04; {{ $comic['price'] }}</p>
                            <p>AVAILABLE ON 11/10</p>
                        </div> 
                       <div class="availability flex align-center">
                           <p> 
                               Check Availbility <i class="fas fa-caret-down"></i>
                            </p> 
                        </div>
                    </div>    
                    <div class="text">{!! $comic['body'] !!}</div> 
                </div>
                {{-- adv --}}
                <div class="adv">
                    <p>Advertisement</p>
                    <img src="../img/adv.png" alt="adv">
                </div>
            </div>
        </section>
    </main>
@endsection