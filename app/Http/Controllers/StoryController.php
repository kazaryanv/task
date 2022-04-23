<?php

namespace App\Http\Controllers;


use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\Slugger\slug;

class StoryController extends Controller
{
    public function index() {
//        $title = new Title();
        $title = DB::table('titles')->where('slug', '=','about');
        return view('history_page', ['data' => $title->get()]);
    }
    public function home_view(){
//        $description = new Title();
        $description = DB::table('titles')->where('slug','=','home');
        return view('hystory', ['data' => $description->get()]);
    }

}
