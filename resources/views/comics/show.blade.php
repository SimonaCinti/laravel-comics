@extends('layouts.main')

@section('content')
    <main class="wrap-home mt-1 relative">
        {{-- SOCIAL BAR FIXED --}}
        <ul class="social-bar">
            <li>
                <i class="fab fa-facebook-f"></i>
            </li>
            <li>
                <i class="fab fa-twitter"></i>
            </li>
            <li>
                <i class="fab fa-pinterest"></i>
            </li>
            <li>
                <i class="fas fa-plus"></i>
            </li>
        </ul>
        {{-- HERO --}}
        <section class="hero" style="background-image: url({{ $comic['image-hero'] }})">
            <div class="container sm">
                <img src="{{ $comic['image-cover'] }}" alt="{{ $comic['title'] }}">
            </div>
        </section>
        {{-- COMIC DETAIL TOP--}}
        <section class="detail-comic-top mt-2">
            <div class="container sm flex justify-between mb-4">
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
        {{-- COMIC DETAIL BOTTOM--}}
        <section class="detail-comic-bottom mt-2"> 
            <div class="container sm flex justify-between mb-4">
                <div class="detail-column">
                    <h4>Talent</h4>
                    <div class="detail-info flex justify-between">
                        <p>Art by</p>
                        <p>Lorem Ipsum artist</p>
                    </div>
                    <div class="detail-info flex justify-between">
                        <p>Written by</p>
                        <p>lorem ipsum writer</p>
                    </div>
                </div>
                <div class="detail-column">
                    <h4> Specs</h4>
                    <div class="detail-info flex justify-between">
                        <p>Series</p>
                        <p>lorem ipsum</p>
                    </div>
                    <div class="detail-info flex justify-between">
                        <p>Price</p>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <div class="detail-info flex justify-between">
                        <p>On sale on date</p>
                        <p>Nov 10 2020</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-comic-nav pb-4">
            <div class="container sm">
                <ul class="flex justify-around">
                    <li>
                        <p>Digital comics</p>
                        <img src="../img/digital.png" alt="digital">
                    </li>
                    <li>
                        <p>comic shop locator</p>
                        <img src="../img/shop.png" alt="shop">
                    </li>
                    <li>
                        <p>Shop locator</p>
                        <img src="../img/locator.png" alt="locator">
                    </li>
                    <li>
                        <p>subscriptions</p>
                        <img src="../img/subscription.png" alt="subscript">
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection