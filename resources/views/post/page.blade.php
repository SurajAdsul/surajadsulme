@extends('layouts.app')

@section('content')

    <h1>{{ $page->title }}</h1>
    <img src="{{ $page->featured_image }}">
    <div class="my-6 text-black text-left text-base tracking-wide p-2 font-normal font-sans">
        {!! $page->body !!}
    </div>

@endsection

