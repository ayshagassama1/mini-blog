<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    //list all posts that are active and order them by the number of requests
    public function index()
    {
        $posts = Post::where('is_active', 1)->orderBy('nb_request', 'desc')->get();
        return view('index', ['posts'=>$posts]);
    }
}
