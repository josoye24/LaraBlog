<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    protected $fillable = [
        'name'
    ];


    public function posts()
    {

        return $this->belongsToMany(Post::Class)->latest("created_at");
        
    }

    public function getRouteKeyName()
    {

        return "name";

    }
}
