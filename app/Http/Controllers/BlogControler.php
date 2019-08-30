<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogControler extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('blog')->with('posts', $posts);
    }
}
