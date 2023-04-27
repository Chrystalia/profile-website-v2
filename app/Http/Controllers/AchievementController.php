<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(){
        return view('achievement', [
            'title' => 'Achievement'
        ]);
    }
}
