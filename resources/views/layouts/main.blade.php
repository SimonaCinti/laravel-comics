<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Comics by Laravel</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">  

    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </body>
</html>