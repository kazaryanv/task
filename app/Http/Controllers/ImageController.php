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

    public function upload(Request $request) {
        $path = $request->file('image')->store('uploads','public');
        $store = Image::create([
            'name' => $request->name,
            'image' => $path,
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

    public function show($id) {
        $image = new Image();
        return view('one_image', ['image' => $image -> find($id)]);
    }

    public function delete($id) {
        $image = new Image();
        $delete_image = $image->find($id);
        $deleting = $delete_image->delete();
        if($deleting) {
            return redirect('image');
        } else {
            return 'Update fail!';
        }
    }

}

