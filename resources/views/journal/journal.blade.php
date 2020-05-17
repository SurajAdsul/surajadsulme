@extends('layouts.app')

@section('content')

    <!--Posts section-->
    <div class="lg:pl-32 mt-12">
        <div class="max-w-2xl">
            <h1 class="text-2xl font-extrabold text-black mb-4">Journal</h1>
            <div class="text-lg text-grey-100 leading-normal spaced-y-6">
                <p class="text-grey-100">
                    My day to day thoughts on random topics ranging from movies to science to psychology.
                </p>
            </div>
            <div class="mt-12 spaced-y-10 mb-10">
                @foreach($posts as $post)
                    <div class="mb-10">
                        <div>
                            <p class="text-lg text-black font-bold no-underline hover:underline">
                                <a href="/blog/{{ $post->slug }}"
                                   class="text-lg text-black font-bold no-underline hover:underline">
                                    {{ $post->title }}</a>
                            </p>
                        </div>
                        <p class="blog-post-color text-base leading-normal mt-1">
                            {!! strip_tags(\Illuminate\Support\Str::words($post->body,25)) !!}
                        </p>
                        <div class="text-grey-darkest text-base leading-normal mt-2"><a
                                href="/blog/{{ $post->slug }}"
                                class="text-gray-800 hover:text-black text-sm no-underline hover:underline">
                                Read this article→</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection





