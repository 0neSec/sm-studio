<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index()
     {
        return view ('pages.Studio');
     }
}
