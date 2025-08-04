<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\categories;

class PostsController extends Controller
{
    public function index()
    {
        // menampilkan halaman index dari posts
        $posts = posts::with('category')
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
            
        $carouselPosts = posts::with('category')
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();
            
        $categories = categories::withCount('posts')
            ->orderBy('name')
            ->get();
            
        return view('page.posts.index', compact('posts', 'carouselPosts', 'categories'));
    }

    public function show($id)
    {
        $post = posts::with('category')->find($id);
        if (!$post) {
            abort(404, 'Post not found');
        }
        return view('page.posts.show', compact('post'));
    }
}
