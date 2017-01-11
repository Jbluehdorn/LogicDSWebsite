<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function games() {
        return view('games');
    }

    public function staff() {
        return view('staff');
    }

    public function contact() {
        return view('contact');
    }
}
