@extends('layouts.main')

@section('title', $title)

@section('container')
    <div class="flex flex-col min-h-screen item-center" style="justify-content: space-between;">
        @include('layouts.navbar', ['active' => 'achievement'])

        <div class="flex min-w-screen justify-center">
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow p-10 md:flex-row md:max-w-2xl ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="assets/{{ 'image' }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight {{ $achievement['text_color'] }}">{{ $achievement['event'] }}</h5>
                    <p class="mb-3 font-normal text-gray-600 ">{{ $achievement['description'] }}</p>
                    <a href="/achievements" class="hover:text-blue-600 mt-3 hover:underline">back</a>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
@endsection
