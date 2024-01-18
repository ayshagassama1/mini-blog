<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    //list all posts
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }
}
