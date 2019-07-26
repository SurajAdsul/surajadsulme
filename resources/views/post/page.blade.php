@extends('layouts.app')

@section('content')
    <!--Posts section-->
    <div class="lg:pl-32 mt-12">
        <div class="max-w-2xl">
            <h1 class="text-2xl font-extrabold text-black mb-4">{{ $page->title }}</h1>
            <div class="text-lg text-grey-100 leading-normal spaced-y-6">
                <p class="text-grey-100">
                    {!! $page->body !!}
                </p>
                <p>Hit the contact form if you want to get in touch or appreciate something</p>
            </div>
        </div>
    </div>
@endsection

