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


    public function edit($id) {
        $image = new Image();
        return view('updating_img', ['image' => $image -> find($id)]);
    }


    public function update(Request $request, $id) {
        $file =Image::find($id);
        $file_name = $file->image;
        $file_path = public_path('uploads/' . $file_name);
        if ($request->hasFile('image')){
            unlink($file_path);
            $f = $request->file('image');
            $file_ext = $f->getClientOriginalExtension();
            $file_name = rand(123456,9999999).'.'. $file_ext;
            $file_path = public_path('uploads/');
            $f->move($file_path,$file_name);
            $file->image = $file_name;
        }else{
            $file->image = $request->old_image;
        }

        $file->name = $request->name;
        $file->content = $request['content'];
        $file->save();

        if ($file){
            return redirect()->route('image')->with('success','Row Updating created');
        }else{
            return redirect()->route('image')->with('fail', 'Fail!');
        }

    }
    public function delete($id) {
        $image = new Image();
        $delete_image = $image->find($id);
        $deleting = $delete_image->delete();
        if($deleting) {
            return redirect()->route('image')->with('success','Deleted successfully');
        } else {
            return redirect()->route(404);
        }
    }

}

