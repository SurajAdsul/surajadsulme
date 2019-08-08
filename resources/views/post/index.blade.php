<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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

        blockquote{
            background-color: #ffffc9;
            padding: 10px;
        }
        body.dark {
            background-color: #1e2227;
            color: #ffffff;
        }
        body.dark code[class*=language-],
        body.dark table tbody>tr:nth-child(odd)>td,
        body.dark table tbody>tr:nth-child(odd)>th {
            background: #282c34
        }
        body.dark h1{
            color: #ffffff;
        }
        body.dark a{
            color: #ffffff;
        }
        body.dark a:hover{
            color: #ffffff;
        }
        body.dark p{
            color: #ffffff;
        }
        body.dark label{
            color: #ffffff;
        }

        .link-light-grey{
            color: #33333333
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109655284-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109655284-2');
    </script>
</head>
<body>
<div class="px-6 pt-8">
    <a class="link-light-grey" href="/">
        <i class="fa fa-home fa-4x home-button"></i>
    </a>
</div>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
<script>
    //    hljs.initHighlightingOnLoad();
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre').forEach((block) => {
        hljs.highlightBlock(block);
    });
    });
</script>
<script type="application/javascript">
    document.addEventListener('DOMContentLoaded', (event) => {
    ((localStorage.getItem('mode') || 'light') === 'dark') ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('light')
    })
</script>
</body>
</html>

