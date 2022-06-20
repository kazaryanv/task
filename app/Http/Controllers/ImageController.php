<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Psy\debug;
use function Symfony\Component\Finder\name;

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


    public function update(Request $request,$id) {
            $users  = Image::find($id);
            $users->name                 = $request->input('name');
            $users->content              = $request->input('content');
            $users->image                = $request->input('image');

            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extension = $request->image->getClientOriginalExtension();
                $fileName = uniqid().'.'.$extension;
                $file->move(public_path().'/storage/',$fileName);
                $data = $fileName;
                $users->image = $data;
                dd($fileName);
            }
              $users->save();
              if($users) {
                 return redirect()->route('image')->with('success', 'Row successfully created');
              } else {
                 return redirect()->route('new-image')->with('fail', 'Fail!');
              }
        }
    public function delete($id) {
        $delete =  Image::find($id);
        $file_name = $delete->image;
        $file_path = public_path('storage/'.$file_name);
        unlink($file_path);
        $delete->delete();
        if($file_path) {
            return redirect()->route('image')->with('success','Deleted successfully');
        } else {
            return redirect()->back()->with('success','Deleted file');
        }
    }

}

