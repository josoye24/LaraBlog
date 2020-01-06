<?php

namespace App\Http\Controllers;


use App\Post;
use App\Tag;



class PostController extends Controller
{

    public function __construct() 
    {

        $this->middleware("auth")->except(["index", "show"]);

    }

    public function index(Post $post)
    {

        $posts = Post::latest()
        ->filter(request()
        ->only(["month", "year"]))
        ->simplePaginate(15); 


        return view("posts.index", compact("posts"));

    }
    

    public function show(Post $post)
    {

        return view("posts.show", compact("post"));

    }

    public function create()
    {

        return view("posts.create");
    }

   
    public function store(){
        $this->validate(request(),[
            "title" => "required",
            "body" => "required"
        ]);


     auth()->user()->publish(
            new Post(request(["title", "body"]))
        );
        
        return redirect()->home();
    }



}
