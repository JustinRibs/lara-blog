<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // create new comment
    public function create(Post $post, Request $request){
        $formFields = $request->validate([
            'content' => 'required|max:200',
        ]);
        $formFields['user_id'] = auth()->user()->id;
        $formFields['post_id'] = $post->id;

        Comment::create($formFields);
        return back();
    }
}
