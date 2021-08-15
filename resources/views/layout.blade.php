<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>When Pigs Fly</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A blog dedicated to the love of pigs.">

    <meta property="og:title" content="When Pigs Fly">
    <meta property="og:description" content="A blog dedicated to the love of pigs.">
    <meta property="og:url" content="http://www.whenpigsfly.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('img/flying-pig.jpeg') }}">
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="344" />

    <meta name="twitter:title" content="When Pigs Fly">
    <meta name="twitter:description" content="A blog dedicated to the love of pigs.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="{{ asset('img/flying-pig.jpeg') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <div class="flex justify-center items-center py-8">
        <div class="mr-5">
            <h1 class="text-7xl font-semibold">When Pigs Fly</h1>
            <h2 class="text-4xl">A blog dedicated to the love of pigs.</h2>
        </div>
        <div>
            <img class="object-contain h-48 w-full" src="{{ asset('img/pig-face-vector.png') }}" alt="Pig Header Image">
        </div>
    </div>
    <hr/>
    @yield('content')
</div>
</body>
</html>
