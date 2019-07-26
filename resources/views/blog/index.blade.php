@extends('layouts.app')

@section('content')

    <!--Posts section-->
    <div class="lg:pl-32 mt-12">
        <div class="max-w-2xl">
            <h1 class="text-2xl font-extrabold text-black mb-4">Articles</h1>
            <div class="text-lg text-grey-100 leading-normal spaced-y-6">
                <p class="text-grey-100">
                    I do like to write blog posts and help to spread the knowledge.
                </p>
                <p>Hit the contact form if you want to get in touch or appreciate something</p>
            </div>
            <div class="mt-12 spaced-y-10 mb-10">

                @foreach($posts as $post)

                    <div class="mb-10">
                        <div>
                            <a href="/blog/{{ $post->slug }}"
                               class="text-lg text-black font-bold no-underline hover:underline">
                                {{ $post->title }}</a>
                        </div>
                        <p class="blog-post-color text-base leading-normal mt-1">
                            {!! strip_tags(\Illuminate\Support\Str::words($post->body,25)) !!}
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

            </div>

            {{--<div class="mt-12 text-lg text-grey-darkest leading-normal spaced-y-6">--}}
                {{--<p>Read the rest of my articles in--}}
                    {{--the <a href="/archives" class="text-black">archives</a>.--}}
                {{--</p>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection





