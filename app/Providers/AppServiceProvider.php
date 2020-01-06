<?php


namespace App\Providers;

use App\Post;
use App\Tag;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer("layout.sidebar", function($view) {

            $recentPost = Post::recentPost();
            $archieves = Post::archieves();
            $tags = Tag::has("posts")->pluck("name");

            $view->with(compact("archieves", "tags", "recentPost"));       

        }); 
        
        
    }
}

