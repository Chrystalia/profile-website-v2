@extends('layouts.main')

@section('title', $title)

@section('container')
    @include('layouts.navbar', ['active' => 'achievement'])

    <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto px-4 mt-10">
        <ol class="relative border-l border-slate-500 dark:border-gray-700">
        <?php $i = 0 ?>
        @foreach ($achievements as $achievement)
            <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-slate-500 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-slate-500 dark:text-gray-500">{{ $achievement['date'] }}</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-slate-800">{{ $achievement['event'] }}</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-slate-500">{{ $achievement['description'] }}</p>
                {{-- <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-slate-500 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-slate-500 focus:text-blue-700 dark:bg-gray-800 dark:text-slate-500 dark:border-gray-500 dark:hover:text-slate-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a> --}}
            </li>
        @endforeach
        </ol>
    </div>

    @include('layouts.footer')
@endsection
