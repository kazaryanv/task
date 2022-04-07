<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("update", ['data' => Title::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("about");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Title::create([
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        if($store) {
            return redirect()->route('title.index')->with('success', 'Title successfully created!');
        } else {
            return back()->with('fail', 'Fail!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Title $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        return view('home-page', ['data' => $title]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        return view('about', ['titles' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Title $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Title  $title)
    {
        $update = $title->update($request->all());
        if($update) {
            return redirect()->route('edit', $title)->with('success', 'Title successfully created!');
        } else {
            return back()->with('fail', 'Fail!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Title $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        $delete = $title->delete();
        if($delete) {
            return redirect()->route('title.index')->with('success', 'Title successfully deleted!');
        } else {
            return back()->with('fail', 'Fail!');
        }
    }
}
