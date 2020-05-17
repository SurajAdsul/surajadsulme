@extends('layouts.app')

@section('content')
    <!--Posts section-->
    <div class="lg:pl-32 mt-12">
        <div class="max-w-2xl">
            <h1 class="text-2xl font-extrabold text-black mb-4">{{ $page->title }}</h1>
            <div class="blog-post-color text-base leading-normal spaced-y-6">
{{--                <p class="text-grey-100">--}}
                <p class="text-base leading-normal mt-1">
                    {!! $page->body !!}
                </p>
            </div>
        </div>
    </div>
@endsection

