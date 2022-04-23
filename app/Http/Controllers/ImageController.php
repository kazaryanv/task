<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() {
        $image = new Image();
        return view('image_admin', ['data' => $image->get()]);
    }

    public function create() {
        return view('new_image');
    }

    public function store(Request $request) {
        $post = new Image();
        $store = $post->create([
            'name' => $request->name,
            'image' => $request->image,
            'content' => $request['content'],
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        if($store) {
            return redirect()->route('image')->with('success', 'Row successfully created');
        } else {
            return redirect()->route('new-image')->with('fail', 'Fail!');
        }
    }
//
//    public function show($id) {
//        $post = new Image();
//        return view('one_image', ['image' => $post -> find($id)]);
//    }


}

