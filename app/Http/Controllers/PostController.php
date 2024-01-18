<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

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
        //update the number of requests
        $post->nb_request = $post->nb_request + 1;
        $post->save();
        //the user who created the post
        $user = User::find($post->user_id);
        return view('post', ['post'=>$post, 'user'=>$user]);
    }

    //delete
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
