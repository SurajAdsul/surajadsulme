@extends('layouts.app')

@section('content')

    <!--Posts section-->
    <div class="lg:pl-32 mt-12">
        <div class="max-w-2xl">
            <h1 class="text-2xl font-extrabold text-black mb-4">Projects</h1>
            <div class="text-lg text-grey-100 leading-normal spaced-y-6">
                <p class="text-grey-100">
                    These days I'm more focused on my private projects and expanding my horizon in development
                    and hoping something will turn into an amazing product.
                    Also learning the frontend aspects of the programming.
                </p>
            </div>
            <div class="mt-12 spaced-y-10 mb-10">

                <div class="mb-10">
                    <div>
                        <p class="text-lg text-black font-bold no-underline hover:underline">
                            <a href="https://github.com/SurajAdsul/ultralight" target="_blank">
                                Ultralight - microframework
                            </a>
                        </p>
                    </div>
                    <p class="blog-post-color text-base leading-normal mt-1">
                        Ultralight - A simple micro-framework for creating REST API's using symfony components.
                        I always wanted to understand the internal of the framework and I did not found better
                        way rather creating my own micro-framework.
                    </p>
                    <div class="text-grey-darkest text-base leading-normal mt-2">
                        <a target="_blank" href="https://github.com/SurajAdsul/ultralight"
                           class="text-gray-800 hover:text-black text-sm no-underline hover:underline">
                            Check on github→
                        </a>
                    </div>
                </div>

                <div class="mb-10">
                    <div>
                        <p class="text-lg text-black font-bold no-underline hover:underline">
                            <a target="_blank" href="https://github.com/SurajAdsul/laravel-analyser"> Laravel
                                analyser </a>
                        </p>
                    </div>
                    <p class="blog-post-color text-base leading-normal mt-1">
                        Laravel-analyser - A Laravel application to analyse the web pages.
                        I have used Laravel framework to create this application
                    </p>
                    <div class="text-grey-darkest text-base leading-normal mt-2">
                        <a target="_blank"
                           href="https://github.com/SurajAdsul/laravel-analyser"
                           class="text-gray-800 hover:text-black text-sm no-underline hover:underline">
                            Check on github→</a>
                    </div>
                </div>

                <div class="mb-10">
                    <div>
                        <p class="text-lg text-black font-bold no-underline hover:underline">

                            <a target="_blank" href="https://github.com/SurajAdsul/appmarket"> Appmarket Laravel
                                package </a>
                        </p>
                    </div>
                    <p class="blog-post-color text-base leading-normal mt-1">
                        AppMarket, a library for getting app details from play store and app store.
                        It extracts images, rating, additional info for the given URL of playstore or appstore
                    </p>
                    <div class="text-grey-darkest text-base leading-normal mt-2"><a
                            target="_blank"
                            href="https://github.com/SurajAdsul/appmarket"
                            class="text-gray-800 hover:text-black text-sm no-underline hover:underline">
                            Check on github→</a>
                    </div>
                </div>


                <div class="mb-10">
                    <div>
                        <p class="text-lg text-black font-bold no-underline hover:underline">


                            <a target="_blank" href="https://github.com/SurajAdsul/ultralight"> ChromeExtension</a>
                        </p>
                    </div>
                    <p class="blog-post-color text-base leading-normal mt-1">
                        This is the simple chrome extension which I have created while I was doing my bachelor degree
                        for my own blog.
                        It pulls the RSS feeds from my blog and displays.
                    </p>
                    <div class="text-grey-darkest text-base leading-normal mt-2"><a
                            target="_blank"
                            href="https://github.com/SurajAdsul/ultralight"
                            class="text-gray-800 hover:text-black text-sm no-underline hover:underline">
                            Check on github→</a>
                    </div>
                </div>

            </div>

            {{--<div class="mt-12 text-lg text-grey-darkest leading-normal spaced-y-6">--}}
            {{--<p>Read the rest of my articles in--}}
            {{--the <a href="/archives" class="text-black">archives</a>.--}}
            {{--</p>--}}
            {{--</div>--}}
        </div>
    </div>

@endsection





