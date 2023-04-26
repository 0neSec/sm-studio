<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $view = Post::all();
        # code...
        return view('admin.index',compact(['view']));
    }
    public function create()
    {
        # code...
        return view('admin.create');
    }
    public function store(Request $request)
    {
        # code...
        // dd($request->all());
        // return view('admin.index');
        Post::create($request->except(['_token','submit']));
        return redirect('/studio');
    }
    public function edit($id)

    {
        $edit = Post::find($id);
        return view('admin.edit',compact(['edit']));
        # code...
    }
    public function update($id, Request $request)

    {
        $edit = Post::find($id);
        $edit->update($request->except(['_token','submit']));
        return redirect('/studio');
    }
    public function delete($id, Request $request)

    {
        $delete = Post::find($id);
        $delete->delete();
        return redirect('/studio');
    }
    // public function FunctionName(Type $var = null)
    // {
    //     # code...
    // }

}
