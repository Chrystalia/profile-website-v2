@extends('layouts.main')

@section('title', $title)

@section('container')

    @include('layouts.navbar', ['active' => 'hobby'])

    <div class="relative min-h-max">

        <div class="py-12 md:py-18 mb-14 -z-10 flex flex-col items-center w-screen ">

            @foreach ($hobbies as $hobby)
                <div id="{{ $hobby['hobby'] }}" class="relative flex flex-col relative items-center justify-between gap-6 scroll-mt-40 my-20
                                                        {{ $hobby['position'] == 'left' ? 'lg:flex-row ' : 'lg:flex-row-reverse' }}">
                    <div class="max-w-md space-y-6 text-center lg:text-left">
                        <h3 class="text-3xl font-semibold text-heading lg:text-4xl {{ $hobby['hobby_color'] }}">
                            {{ $hobby['hobby'] }}
                        </h3>
                        <p class="text-lg font-medium">
                            {{ $hobby['description'] }}
                        </p>
                    </div>
                    <div class="w-20"></div>
                    <div class="max-w-md">
                        <img
                        src="{{ asset($hobby['image_path']) }}"
                        alt=""
                        class="w-full rounded-3xl"
                        />
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    @include('layouts.footer')
@endsection
