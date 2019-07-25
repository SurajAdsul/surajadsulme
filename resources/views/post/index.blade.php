<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/atom-one-dark.min.css">
    <style>
        .blog-post-color {
            color: #3d4852;
        }

        .block {
            display: block;
        }

        .markdown {
            font-family: Open Sans, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Arial, sans-serif;
            font-weight: 400;
            font-size: 1rem;
        }

        .markdown pre {
            font-size: small;
            line-height: 1.75;
            padding: 1em 1.5em;
            -webkit-font-smoothing: subpixel-antialiased;
        }

        .markdown code {
            white-space: pre;
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        }
    </style>
</head>
<body>

<div id="app" class="py-8 lg:py-16 px-6 max-w-2xl mr-auto ml-auto">
    <article>
        <header>
            <h1 class="text-4xl font-bold mb-10 leading-none tracking-tight text-gray-800">
                {{ $post->title }}
            </h1>
            <div class="text-grey-dark mb-6">{{ \Illuminate\Support\Carbon::parse($post->publish_date)->format('M d, Y') }}
                . {{ readingTime($post->body) }} </div>
        </header>
        <div class="blog-post-color markdown">
            {!! $post->body !!}
        </div>

    </article>

    <div class="lg:pl-32 mt-12 bg-blue-100">
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
<script>
    //    hljs.initHighlightingOnLoad();
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre').forEach((block) => {
        hljs.highlightBlock(block);
    });
    });
</script>
</body>
</html>

