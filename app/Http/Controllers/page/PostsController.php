<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\posts;

class PostsController extends Controller
{
    public function index()
    {
        // menampilkan halaman index dari posts
        $posts = posts::orderBy('created_at', 'desc')->get();
        return view('page.posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = posts::find($id);
        if (!$post) {
            abort(404, 'Post not found');
        }
        return view('page.posts.show', compact('post'));
    }
}
