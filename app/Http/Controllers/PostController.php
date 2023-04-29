<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PostController;
// use Illuminate\Support\Facades\Redirect;


class PostController extends Controller
{
    public function index()
    {
        # code...
        $post = Post::all();
        return view('admin.index',compact(['post']));
    }
    public function create()
    {
        # code...

        return view('admin.create');
    }
    public function update($id)
    {
        # code...
        $edit = Post::find($id);
        return view('admin.edit', compact(['edit']));
    }
    public function store(Request $request)
    {
        # code...

        // $data -> $request->all();
        $data = $request->validate([
            'tempat' => 'required',
            'image' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
            'alamat' => 'required',
            'hp' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);
        $file = $request->file('image');

        $filename= uniqid().'.'. $file->getClientOriginalExtension();
       $file->storeAs('public/image',$filename);
       $data['image']= $fileName;
        // if($request->hasFile('image')){
        //     // get filename with the extention
        //     $fileNameWithExt = $request->file('image')->getClientOrginalName();

        //     // get just filename
        //     $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        //     // get just Ext
        //     $extention = $request->file('image')->getClientOrginalExtention();

        //     // Filename to store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extention;

        //     // upload image
        //     $path = $request->file('image')->storeAs('public/images',$fileNameToStore);
        // }else{
        //     $fileNameStore='noimage.jpg';
        // }


        Post::create($data);

        return redirect('/studio')->with('success', 'data berhasil ditambahkan');
    }
 public function delete($id)
 {
    # code...
    Post::find($id)->delete();
    return redirect('/studio');
 }
 public function show($id)
 {
    # code...
    $detail = Post::find($id);
    return view('admin.detail', compact(['detail']));
 }


}
