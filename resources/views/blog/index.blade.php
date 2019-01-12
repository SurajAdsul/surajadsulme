<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-teal p-6">
    <div class="flex items-center flex-no-shrink text-white mr-6">
        <span class="font-semibold text-xl tracking-tight ">Suraj Adsul</span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <a href="#responsive-header"
               class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                Home
            </a>
            <a href="#responsive-header"
               class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                About Me
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
                Contact
            </a>
        </div>
    </div>
</nav>

<div class="container mx-auto px-4">
    <div class="flex flex-row bg-grey-lighter">

        <div class="text-grey-darker px-4 m-2">
            <a href="/" class="flex items-center no-underline">
                <img src="https://avatars.githubusercontent.com/u/4323180" alt=""
                     class="h-10 w-10 md:h-12 md:w-12 lg:h-20 lg:w-20 rounded-full">
            </a>
        </div>

        <div class="text-grey-darker px-4 m-2">
            <span class="tracking-tight block text-black no-underline font-bold text-xl lg:text-3xl font-extrabold leading-none lg:leading-tight">Suraj Adsul</span>
        </div>

        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto px-4 py-2 m-2 uppercase tracking-wide text-xs spaced-x-6">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-grey-darker hover:text-black mr-4 no-underline">
                    Home
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-grey-darker hover:text-black mr-4 no-underline">
                    About Me
                </a>
                <a href="#responsive-header"
                   class="block mt-4 lg:inline-block lg:mt-0 text-grey-darker hover:text-black no-underline">
                    Contact
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto px-4">

    <div class="flex flex-wrap">
        @foreach($posts as $post)
            <div class="w-1/3 p-2">
                <div class="text-black text-left p-2">
                    <h2>
                        <a href="/blog/{{ $post->slug }}" class="text-black hover:text-black no-underline">
                            <h5>{{ $post->title }}</h5>
                        </a>
                    </h2>
                </div>
                <div class="text-grey-dark text-left text-base tracking-wide p-2 font-normal font-sans">
                    <p>
                        {!! \Illuminate\Support\Str::words($post->body,80) !!}
                    </p>
                </div>
                <div class="flex items-center p-2">
                    <img class="w-10 h-10 rounded-full mr-4"
                         src="/storage/wink/images/0y3IYICQmz1Bsavg0ytgRVXCZ09ahkoS70JQ35X2.jpeg"
                         alt="Avatar of Suraj Adsul">
                    <div class="text-sm">
                        <p class="text-black leading-none">Suraj Adsul</p>
                        <p class="text-grey-dark">{{ $post->publish_date }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    {{--@foreach($posts as $post)--}}
    {{--<div>--}}
    {{--<a href="/blog/{{ $post->slug }}">--}}
    {{--<img src="{{ $post->featured_image }}">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<a href="/blog/{{ $post->slug }}">--}}
    {{--<h5>{{ $post->title }}</h5>--}}
    {{--<p>{{ $post->excerpt }}</p>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<small>Publication Date: {{ $post->publish_date }}</small>--}}
    {{--</div>--}}
    {{--<hr/>--}}
    {{--@endforeach--}}

    {{--{{ $posts->links() }}--}}

</div>
</body>
</html>




