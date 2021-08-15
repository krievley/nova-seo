@extends('layout')

@section('content')
    <div class="w-2/3 p-3 mx-auto">
        @foreach($posts as $post)
            <a href="{{ route('post', $post->id) }}">
                <div class="flex items-center p-10">
                    <div class="mr-5">
                        <img class="object-contain h-20 w-full" src="{{ asset('img/pig-black.png') }}" alt="Pig Icon">
                    </div>
                    <div>
                        <h4 class="text-2xl">{{ $post->title }}</h4>
                        <h5 class="text-xl font-light">{{ $post->summary }}</h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
