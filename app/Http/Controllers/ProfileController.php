<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        return view('profile', [
            'title' => 'Profile',
            'name' => 'Chrystalia Glenys Winata Ang',
            'status' => 'Student',
            'institution' => 'Bina Nusantara University',
            'description' => 'Welcome to my tiny space on the internet.'
        ]);
    }
}
