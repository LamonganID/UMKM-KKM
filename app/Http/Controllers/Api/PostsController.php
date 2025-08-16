<?php

namespace App\Http\Controllers\Api;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostsResource;
use App\Http\Resources\PostsResources;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Posts::latest()->paginate(5);
        return new PostsResources(true, 'List Data Posts', $posts);
    }

}
