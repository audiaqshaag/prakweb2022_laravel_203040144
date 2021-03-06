<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
   
        return view('blog', [
            "title" => "All Post",
            "posts" => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Post $post)
    {

        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
