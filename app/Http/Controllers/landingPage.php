<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPage extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function posts()
    {
        return view('page.posts');
    }
    public function album()
    {
        return view('page.album');
    }
    public function about()
    {
        return view('page.about');
    }
    public function contact()
    {
        return view('page.contact');
    }
    public function services()
    {
        return view('page.services');
    }
}
