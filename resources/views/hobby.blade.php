@extends('layouts.main')

@section('title', $title)

@section('container')
    @extends('layouts.navbar')

    <div class="max-w-screen-xl flex flex-wrap items-center justify-around mx-auto p-4">
        <a href="#cook">
            <span class="inline-flex items-center rounded-full border-2 border-red-200 bg-red-200 px-2 py-1 text-sm font-semibold text-red-600 shadow-sm">
                Cook
            </span>
        </a>

        <a href="#crochet">
            <span class="inline-flex items-center rounded-full border-2 border-green-200 bg-green-200 px-2 py-1 text-sm font-semibold text-green-600 shadow-sm">
                Crochet
            </span>
        </a>

        <a href="#travel">
            <span class="inline-flex items-center rounded-full border-2 border-orange-200 bg-orange-200 px-2 py-1 text-sm font-semibold text-orange-600 shadow-sm">
                Travel
            </span>
        </a>
    </div>

    <div class="px-8 py-12 md:py-18 mb-14">
        <div class="mx-auto max-w-6xl space-y-24 md:space-y-36">
            <div id="cook" class="flex flex-col items-center justify-between gap-6 lg:flex-row pt-14">
              <div class="max-w-md space-y-6 text-center lg:text-left">
                <h3 class="text-3xl font-semibold text-heading lg:text-4xl text-red-600 ">
                  Cook
                </h3>
                <p class="text-lg font-medium">
                    For me, cooking involve experimenting with new recipes, learning new cooking techniques, and creating meals that are both delicious and visually appealing. I loved baking sweet treats or cooking up savory dishes (even though I often make mistakes and made failed dishes).
                </p>
              </div>

              <div class="max-w-lg">
                <img
                  src="{{ asset('assets/cook.jpeg') }}"
                  alt=""
                  class="w-full rounded-3xl"
                />
              </div>
            </div>


            <div id="crochet" class="flex flex-col items-center justify-between gap-6 lg:flex-row-reverse pt-14">
              <div class="max-w-md space-y-6 text-center lg:text-left">
                <h3 class="text-3xl font-semibold text-heading lg:text-4xl text-green-600 ">
                  Knit & Crochet
                </h3>
                <p class="text-lg font-medium">
                  I started learning crochet and making amigurumi when I was in Junior High School. At that time, I was encouraged by my friend to learn crochet. The first project that I finished was knitting a red scarf, and from there I continued to learn crochet and start making amigurumi for fun.
                </p>
              </div>

              <div class="max-w-lg">
                <img
                  src="{{ asset('assets/crochet.jpeg') }}"
                  alt=""
                  class="w-full rounded-3xl"
                />
              </div>
            </div>


            <div id="travel" class="flex flex-col items-center justify-between gap-6 lg:flex-row pt-14">
              <div class="max-w-md space-y-6 text-center lg:text-left">
                <h3 class="text-3xl font-semibold text-heading lg:text-4xl text-orange-600 ">
                  Travel
                </h3>
                <p class="text-lg font-medium">
                    I love visiting new places for exploration, relaxation, or adventure. When I want to travel to a new place, I usually plan and organize the trip a head of time. By traveling to new destinations, I learned about different cultures, experiencing new foods, sights, and activities. Traveling enables me to broaden my horizons and create lasting memories.
                </p>
              </div>

              <div class="max-w-lg">
                <img
                  src="{{ asset('assets/travel.JPG') }}"
                  alt=""
                  class="w-full rounded-3xl"
                />
              </div>
            </div>
        </div>
    </div>


    @extends('layouts.light-dark-mode-script')
@endsection
