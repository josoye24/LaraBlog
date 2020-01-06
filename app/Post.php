<?php

namespace App;
use Carbon\Carbon;
use App\Post;




class Post extends Model

{
    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)  
    {
        $this->comments()->create(compact("body"));
        


        //add acomment to a post
        // Comment::create([ 

         // "body" => $body,
          // "post_id" => $this->id

         // ]);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {

        return "title";

    }

    public function scopeFilter($query, $filters) 
    {
        if (isset($filters["month"])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }


        if (isset($filters["year"])) {
            $query->whereYear('created_at', $filters['year']);
        }
        
    }


    public function tags()
    {

        return $this->belongsToMany(Tag::Class);
        // Any post may have many tags
        // Any tag mat be applied to amny posts

    }


    public static function archieves()
    {

    return static::selectRaw("year(created_at) year, monthname(created_at) month, count(*)publish")
            ->groupBy("year", "month")
            ->orderByRaw("min(created_at) desc")
            ->get()
            ->toArray();
    }

    public static function recentPost()
    {

    return Post::latest()->paginate(5);
    }
}
