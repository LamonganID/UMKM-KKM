<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\albums;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest posts (limit to 3 for the landing page)
        $latestPosts = posts::orderBy('created_at', 'desc')->limit(3)->get();
        
        // Fetch all albums
        $albums = albums::all();
        
        // Fetch contact information
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        
        return view('welcome', compact('latestPosts', 'albums', 'contacts'));
    }
}
