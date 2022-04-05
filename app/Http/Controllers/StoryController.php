<?php

namespace App\Http\Controllers;


use App\Models\Title;
use Illuminate\Http\Request;
use function Symfony\Component\String\Slugger\slug;

class StoryController extends Controller
{
    public function index() {
        $title = new Title();
        return view('history_page', ['data' => $title->get()]);
    }
    public function home_view(){
        $description = new Title();
        return view('hystory', ['data' => $description->get()]);
    }



}
