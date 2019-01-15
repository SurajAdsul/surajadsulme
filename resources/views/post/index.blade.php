@extends('layouts.app')

@section('content')

    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->featured_image }}">
    <div class="text-grey-dark">{{ \Illuminate\Support\Carbon::parse($post->publish_date)->format('M d, Y') }}
        . {{ readingTime($post->body) }} </div>

    <div class="my-6 text-black text-left text-base tracking-wide p-2 font-normal font-sans">
        {!! $post->body !!}
    </div>

@endsection
