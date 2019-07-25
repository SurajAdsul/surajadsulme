@extends('layouts.app')

@section('content')
    {{--<div class="flex flex-wrap flex-col">--}}
        {{--@foreach($posts as $post)--}}
            {{--<div class="px-2 py-2 m-2">--}}
                {{--<div class="text-black text-left p-2">--}}
                    {{--<h2>--}}
                        {{--<a href="/blog/{{ $post->slug }}"--}}
                           {{--class="text-black hover:text-black no-underline hover:underline">--}}
                            {{--<h5>{{ $post->title }}</h5>--}}
                        {{--</a>--}}
                    {{--</h2>--}}
                {{--</div>--}}
                {{--<div class="text-grey-dark text-left text-base tracking-wide p-2 font-normal font-sans">--}}
                    {{--<p>--}}
                        {{--{!! \Illuminate\Support\Str::words($post->body,50) !!}--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="flex items-center p-2">--}}
                    {{--<img class="w-10 h-10 rounded-full mr-4"--}}
                         {{--src="/storage/wink/images/NbwL0c3MIHlI7QJtpFYuTORUskpoxEbHo9nSaaUz.jpeg"--}}
                         {{--alt="Avatar of Suraj Adsul">--}}
                    {{--<div class="text-sm">--}}
                        {{--<p class="text-black leading-none">Suraj Adsul</p>--}}
                        {{--<p class="text-grey-dark">{{ \Illuminate\Support\Carbon::parse($post->publish_date)->format('M d, Y') }}</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}


    @foreach($posts as $post)

    <div class="mb-10">
        <div>
            <a href="/blog/{{ $post->slug }}" class="text-lg text-black font-bold no-underline hover:underline">
                {{ $post->title }}</a>
        </div>
        <p class="blog-post-color text-base leading-normal mt-1">
            {!! \Illuminate\Support\Str::words($post->body,50) !!}
        </p>
        <div class="text-grey-darkest text-base leading-normal mt-2"><a
                    href="/css-utility-classes-and-separation-of-concerns"
                    class="text-gray-800 hover:text-black text-sm no-underline hover:underline">
                Read this article→</a>
        </div>
        <div class="text-sm">
            <p class="text-grey-dark">{{ \Illuminate\Support\Carbon::parse($post->publish_date)->format('M d, Y') }}</p>
        </div>
    </div>
    @endforeach
@endsection





