<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //store
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->is_active = 1;
        $post->nb_request = 0;

        $post->save();
    }

    //show
    public function show($id)
    {
        $post = Post::find($id);
        return $post;
    }

    //delete
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
