<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = \App\Models\posts::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('posts'));
    }

}
