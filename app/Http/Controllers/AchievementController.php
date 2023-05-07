<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public $achievements = [
        [
            'date' => '17 January 2023',
            'event' => 'Top 5 in Young Innovation Festival 2022',
            'slug' => 'ynfest-2022',
            'text_color' => 'text-red-600',
            'description' => 'Inspired by the BCA Innovation Award (BIA), YNFEST is an event for Trainees and PPTI/BP participants, where they need to define problems in their area, and
            looking for a solution to the problem. The purpose of this event is to increase AGILTY, CRITICAL & ANALYTICAL THINKING, & CREATIVITY'
        ],
        [
            'date' => 'October 2022',
            'event' => 'Kaltim Stimulan Scholarship Awardee 2022',
            'slug' => 'kaltim-stimulan-2022',
            'text_color' => 'text-green-600',
            'description' => 'Kaltim Stimulan is a scholarship awarded by the Provincial Government of East Kalimantan to high performing students with academic, non-academic achievements, final assignments, and professional education.'
        ],
        [
            'date' => 'March 2022',
            'event' => 'PPTI BCA Scholarship Awardee 2021',
            'slug' => 'ppti-2021',
            'text_color' => 'text-green-600',
            'description' => 'Bank Central Asia (BCA) Scholarship is one of the Corporate Social Responsibility programs, aimed at high achieving high school/vocational school/equivalent graduates. This scholarship is given in the form of the Business and Banking Education Program (PPBP) and the Information Engineering Education Program (PPTI) organized by BCA.'
        ],
        [
            'date' => 'October 2021',
            'event' => 'Kaltim Stimulan Scholarship Awardee 2021',
            'slug' => 'kaltim-stimulan-2021',
            'text_color' => 'text-green-600',
            'description' => 'Kaltim Stimulan is a scholarship awarded by the Provincial Government of East Kalimantan to high performing students with academic, non-academic achievements, final assignments, and professional education.'
        ],
        [
            'date' => '16 February 2020',
            'event' => 'Gold Medalist in Choral Orchestra Folklore Festival 2020',
            'slug' => 'coff-2020',
            'text_color' => 'text-orange-600',
            'description' => 'Choral Orchestra and Folklore Festival (COFF) 2020 is a Choir Competition and Archipelagic Creative Dance Competition, which are international and national level competitions.'
        ],
        [
            'date' => '07 September 2019',
            'event' => 'Gold Medalist in Penabur International Choir Festival 2019 (Senior High School and Folklore Category)',
            'slug' => 'picf-2019',
            'text_color' => 'text-orange-600',
            'description' => 'Penabur International Choir Festival (PICF) is a competition that is held by BPK Penabur Institution. This event was participated by thousands of people and my team got a gold medal. We were also declared as the Senior High School category winner with the total score of 86.98 and eligible to joined the Grand Prix.'
        ],
        [
            'date' => '1-2 September 2017',
            'event' => 'PESPARANI 2017 Gold Medalist in Children Choir Category with score 84.21',
            'slug' => 'pesparani-2017',
            'text_color' => 'text-orange-600',
            'description' => 'PESPARANI stands for "Pesta Paduan Suara Gerejani" which is an Indonesian term that translates to "Church Choir Festival". '
        ],
    ];

    public function index(){
        return view('achievements', [
            'title' => 'Achievement',
            'achievements' => $this->achievements
        ]);
    }

    public function show($slug){
        $achieve = [];
        foreach($this->achievements as $achievement){
            if($achievement['slug'] === $slug){
                $achieve = $achievement;
            }
        }
        return view('achievement', [
            'title' => 'Achievement',
            'achievement' => $achieve
        ]);
    }
}
