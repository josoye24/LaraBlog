<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;


class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tag::class, 10)->create();

        foreach ((range(1, 20)) as $index) 
        {
        
            DB::table('post_tag')->insert(
                [
                    'post_id' => Post::select('id')->orderByRaw("RAND()")->first()->id,
                    'tag_id' => Tag::select('id')->orderByRaw("RAND()")->first()->id,
                ]
            );
        }
        
    }
}
