<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // common reqs:
    // show, edit, create,

    // show all posts
    public function show()
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

        Post::create($formFields);
        return redirect('/');
    }

}
