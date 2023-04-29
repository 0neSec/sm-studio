<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index()
     {
         # code...
         $post = Post::all();
         return view('pages.Home',compact(['post']));
     }
}
