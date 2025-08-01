<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        $categories = \App\Models\categories::all();
        return view('categories.index', compact('categories'));
    }
}
