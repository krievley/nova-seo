@extends('layout')

@section('content')
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
    <div class="flex items-center p-10">
        <div class="bg-pink-200 mr-5">
            <img class="object-contain h-20 w-full" src="{{ asset('img/pig-black.png') }}" alt="Pig Icon">
        </div>
        <div>
            <p>Post Title</p>
            <p>Post summary.</p>
        </div>
    </div>
@endsection
