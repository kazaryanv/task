<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {
        SEOMeta::setTitle('home');
        return view('history_page');
    }
    public function home_view(){
        return view('hystory');
    }
}
