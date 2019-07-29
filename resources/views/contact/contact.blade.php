@extends('layouts.app')

@section('content')
    <!--Posts section-->
    <div class="lg:pl-32 mt-12">
        <div class="w-full max-w-2xl">
            <h1 class="text-2xl font-extrabold text-black mb-4">Contact me</h1>
            @if ($errors->any())
                <div class="alert alert-danger text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success text-green-500">
                    {{ session()->get('success') }}
                </div>
            @endif
            <form class="bg-white rounded pt-6 pb-8 mb-4" method="post" action="{{url('/contact')}}">
                {{csrf_field()}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="name" name='name' type="text" placeholder="name">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        E-mail
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                           id="email" name='email' type="email" placeholder="email">
                    {{--<p class="text-red-500 text-xs italic">Please choose a email.</p>--}}
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                        Message
                    </label>
                    <textarea
                            class="resize-none shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="content" name='content' type="content" placeholder="message" rows="15"></textarea>
                    {{--<p class="text-red-500 text-xs italic">Please write a message.</p>--}}
                </div>
                <div class="flex items-center justify-between md:mb-0">
                    <button class="md:min-w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

