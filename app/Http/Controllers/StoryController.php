<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {
        return view('history_page');
    }
    public function home_admin(){
        return view('home-page');
    }
    public function about(){
        return view('about');
    }
    public function home_view(){
        return view('hystory');
    }
}
