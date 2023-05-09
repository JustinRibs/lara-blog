<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // common reqs:
    // show, edit, create,

    // show all posts
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->get(),
        ]);
    }
    // create new post
    public function create(Request $request){
        $formFields = $request->validate([
            'header' => 'required|max:40',
            'message' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Post::create($formFields);
        return redirect('/');
    }

    // show single post
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post,
        ]);
    }

}
