<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleRequest;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index() {
        $titles = new Title();
        return view('update', ['data' => $titles->get()]);
    }


    public function show($id) {
        $title = new Title();
        return view('home-page', ['title' => $title -> find($id)]);
    }

    public function edit($id) {
        $title = new Title();
        return view('about', ['title' => $title -> find($id)]);
    }

    public function update(TitleRequest $request) {
        $title = new Title();
        $updated_post = $title->find($request->id);
        $updating = $updated_post->update([
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => NOW()
        ]);
        if($updating) {
            return redirect()->route('title');
        } else {
            return 'Update fail!';
        }
    }
}
