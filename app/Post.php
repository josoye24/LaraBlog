<?php

namespace App;
use Carbon\Carbon;
use App\Post;
use App\Comment;
use App\User;
use App\Tag;




class Post extends Model

{
    public function comments() 
    {
        return $this->hasMany(Comment::class);
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
