<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = [
            [
                'hobby' => 'Cook',
                'hobby_color' => 'text-red-600',
                'description' => ' For me, cooking involve experimenting with new recipes, learning new cooking techniques, and creating meals that are both delicious and visually appealing. I loved baking sweet treats or cooking up savory dishes (even though I often make mistakes and made failed dishes).',
                'image_path' => 'assets/cook.jpeg',
                'position' => 'left'
            ],
            [
                'hobby' => 'Crochet',
                'hobby_color' => 'text-green-600',
                'description' => ' I started learning crochet and making amigurumi when I was in Junior High School. At that time, I was encouraged by my friend to learn crochet. The first project that I finished was knitting a red scarf, and from there I continued to learn crochet and start making amigurumi for fun.',
                'image_path' => 'assets/crochet.jpeg',
                'position' => 'right'
            ],
            [
                'hobby' => 'Travel',
                'hobby_color' => 'text-orange-600',
                'description' => 'I love visiting new places for exploration, relaxation, or adventure. When I want to travel to a new place, I usually plan and organize the trip a head of time. By traveling to new destinations, I learned about different cultures, experiencing new foods, sights, and activities. Traveling enables me to broaden my horizons and create lasting memories.',
                'image_path' => 'assets/travel.JPG',
                'position' => 'left'
            ]
        ];
        return view('hobby', [
            'title' => 'Hobby',
            'hobbies' => $hobbies
        ]);
    }
}
