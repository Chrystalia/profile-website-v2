<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        return view('hobby', [
            'title' => 'Hobby'
        ]);
    }
}
