@extends('layouts.main')

@section('title', $title)

@section('container')
    @extends('layouts.navbar')

    {{--
        PICF SHS Category Winner
        PPTI Awardee
        YNFEST Top 5
    --}}

    <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4 mt-10">
        <ol class="relative border-l border-slate-500 dark:border-gray-700">
            <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-slate-500 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-slate-500 dark:text-gray-500">17 January 2023</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Top 5 YNFEST</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-slate-500">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                {{-- <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-slate-500 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-slate-500 focus:text-blue-700 dark:bg-gray-800 dark:text-slate-500 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></a> --}}
            </li>
            <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-slate-500 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-slate-500 dark:text-gray-500">March 2021</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">PPTI BCA 2021 Awardee</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-slate-500">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
            </li>
            <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-slate-500 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-slate-500 dark:text-gray-500">16 February 2020</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">COFF 2020 GRAND PRINX WINNER with score 89.13</h3>
                <p class="text-base font-normal text-gray-500 dark:text-slate-500">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
            </li>
            <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-slate-500 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-slate-500 dark:text-gray-500">07 September 2019</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">PICF 2019 Gold Medalist and as 'Senior High School' Category Winner with score 86.98</h3>
                <p class="text-base font-normal text-gray-500 dark:text-slate-500">All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.</p>
            </li>
            <li class="ml-4">
                <div class="absolute w-3 h-3 bg-slate-500 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                <time class="mb-1 text-sm font-normal leading-none text-slate-500 dark:text-gray-500">1-2 September 2017</time>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">PESPARANI 2017 Gold Medalist in 'Paduan Suara Anak' Category with score 84.21</h3>
                <p class="text-base font-normal text-gray-500 dark:text-slate-500">PESPARANI stands for "Pesta Paduan Suara Gerejani" which is an Indonesian term that translates to "Church Choir Festival". </p>
            </li>
        </ol>
    </div>

@endsection
