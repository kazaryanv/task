<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\Slugger\slug;

class StoryController extends Controller
{
    public function index() {
//        $title = new Title();
        $title = DB::table('titles')->where('slug', '=','about');
        return view('main_page.history_page', ['data' => $title->get()]);
    }
    public function home_view(){
//        $description = new Title();
        $description = DB::table('titles')->where('slug','=','home');
        return view('main_page.hystory', ['data' => $description->get()]);
    }

    public function all_Tiger(){
        $tigers = new Image();
        return  view('main_page.all-tiger', ['data' => $tigers->get()]);
    }
    public function show($id){
        $image = new Image();
        return view('main_page.one_post', ['image' => $image -> findOrFail($id)]);
    }
}
