<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function __construct() 
    {
        $this->middleware("auth");

    }

    public function store(Post $post, Request $request) {
              
        $this->validate(request(), ["body" => "required|min:2" ]);
        
         $tt = Comment::create([ 
            "body" => $request->input("body"),
            "post_id" => $post->id,
            "user_id" => auth()->user()->id
            ]);

        return back()->with('addComment', 'Comment sucessfully added');

    }

}
