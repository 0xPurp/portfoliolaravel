<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BackBlogController extends Controller
{
    public function index (){
        $dataBlog = Blog::all();
        return view ("backoffice.backBlog", compact("dataBlog"));
    }

    public function create(){
        return view ("backoffice.backBlog");
    }

    public function store(Request $request){
        $newEntry = new Blog;
        $newEntry->titre = $request->titre;
        $newEntry->image = $request->image;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect() -> back();
    }

    public function delete(Blog $id){
        $id->delete();
        return redirect() -> back();
    }

    public function edit (Blog $id) {
        $newEntry = $id;
        return view('backoffice.updateBlog', compact('newEntry'));
    }

    public function update (Blog $id, Request $request) {
        $newEntry = $id;
        $newEntry->titre = $request->titre;
        $newEntry->image = $request->image;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect()->route('show', $newEntry->id);
    }
}
