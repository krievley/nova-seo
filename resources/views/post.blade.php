@extends('layout')

@section('content')
    <div class="px-10">
        <h3 class="text-3xl py-5">{{ $post->title }}</h3>
        <div class="text-lg">
            {!! $post->content !!}
        </div>
        <div class="py-5">
            <p class="text-lg font-medium">Written By: {{ $post->author }}</p>
            <p class="text-opacity-80 font-extralight">{{ date("F n, Y", strtotime($post->created_at)) }}</p>
        </div>
    </div>
@endsection
