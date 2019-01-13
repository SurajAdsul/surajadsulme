<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Suraj Adsul</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mx-auto px-4">
    <div class="flex flex-row bg-grey-lighter">

        <div class="text-grey-darker px-4 m-2">
            <a href="/" class="flex items-center no-underline">
                <img src="/storage/wink/images/NbwL0c3MIHlI7QJtpFYuTORUskpoxEbHo9nSaaUz.jpeg" alt=""
                     class="h-24 w-24 rounded-full">
            </a>
        </div>

        <div class="flex flex-col bg-grey-lighter">
            <div class="text-grey-darker px-4 m-2">
                <span class="tracking-tight block text-black no-underline font-bold text-xl lg:text-3xl font-extrabold leading-none lg:leading-tight">Suraj Adsul</span>
            </div>

            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto px-4 py-2 m-2 uppercase tracking-wide text-xs spaced-x-6">
                <div class="text-sm lg:flex-grow">
                    <a href="/"
                       class="block mt-4 lg:inline-block lg:mt-0 text-grey-darker hover:text-black mr-4 no-underline">
                        Home
                    </a>
                    <a href="/about/me"
                       class="block mt-4 lg:inline-block lg:mt-0 text-grey-darker hover:text-black mr-4 no-underline">
                        About Me
                    </a>
                    {{--<a href="#responsive-header"--}}
                    {{--class="block mt-4 lg:inline-block lg:mt-0 text-grey-darker hover:text-black no-underline">--}}
                    {{--Contact--}}
                    {{--</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto px-4 my-16">
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->featured_image }}">
    <div class="text-grey-dark">{{ \Illuminate\Support\Carbon::parse($post->publish_date)->format('M d, Y') }}
        . {{ readingTime($post->body) }} </div>

    <div class="my-6 text-black text-left text-base tracking-wide p-2 font-normal font-sans">
        {!! $post->body !!}
    </div>
</div>
</body>
</html>