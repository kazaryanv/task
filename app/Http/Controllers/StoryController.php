<?php

namespace App\Http\Controllers;


use App\Models\Title;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index() {
        $title = new Title();
        return view('history_page', ['data' => $title->get()]);
    }
    public function home_view(){
        $title = new Title();
        return view('hystory', ['data' => $title->get()]);
    }




    public function about(){
        return view('about');
    }
    public function indexed(){
        $title = new Title();
        return view('home-page',['date' => $title->get()]);
    }
    public function edit($id)
    {
        $titles = new Title();
        return view('home-page', ['title' => $titles -> find($id)]);
    }
    public function update(Request $request, $id)
    {
        $titles = new Title();
        $updated_title = $titles->find($request->id);
        $updating = $updated_title->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => NOW()
        ]);
        if($updating) {
            return redirect('home-page');
        } else {
            return 'Update fail!';
        }
    }
}
