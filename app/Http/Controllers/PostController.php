<?php

namespace App\Http\Controllers;


use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function __construct() 
    {
        $this->middleware("auth")->except(["index", "show"]);

    }

    public function index(Post $posts)
    {

        $posts = Post::latest()
        ->filter(request()
        ->only(["month", "year"]))
        ->simplePaginate(15); 


        return view("posts.index", compact("posts"));

    }
    

    public function show(Post $slug)
    {
        $post = $slug;
        return view("posts.show", compact("post"));

    }

    public function create()
    {

        return view("posts.create");
    }

   
    public function store(Request $request) {
        $this->validate(request(),[
            "title" => "required",
            "body" => "required",
            "tags" => ""
        ]);

        $slug = Str::slug($request->title, '-');

        

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->slug = $slug;
        $post->save();

        $input = $request->input("tags");

        if (DB::table('tags')->where('name', $input)->exists())
        {
            $tag = DB::table('tags')->where('name', $input)->value('id');
        } else {
        
        $Newtag = Tag::create([ 
            "name" => $input,
            ]);
        $tag = $Newtag->id;

        }

        DB::table('post_tag')->insert(
                ['post_id' => $post->id, 
                'tag_id' => $tag]
            );
    
        return redirect()->home()->with('message', 'New Post Added Successfully');
    }
}
