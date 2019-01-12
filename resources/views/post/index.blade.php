<html>
<head>
</head>

<body>

<h1>{{ $post->title }}</h1>
<img src="{{ $post->featured_image }}">
<div> {{ readingTime($post->body) }} </div>
<div>    {!! $post->body !!} </div>
</body>
</html>