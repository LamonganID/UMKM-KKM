<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class posts extends Controller
{
    //
    public function index()
    {
        return view('page.posts.index');
    }

    public function show($id)
    {
        return view('page.posts.show', ['id' => $id]);
    }
}
