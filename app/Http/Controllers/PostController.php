<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post', ['post' => $post]);
    }
}
