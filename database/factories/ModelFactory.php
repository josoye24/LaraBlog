<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Post;
use App\Comment;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase .' '.$faker->bs,
        'body' => $faker->realText(350),
        'created_at' => now(),
        'user_id' => User::select('id')->orderByRaw("RAND()")->first()->id,
    ];
});


$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(5),
        'created_at' => now(),
        'user_id' => User::select('id')->orderByRaw("RAND()")->first()->id,
        'post_id' => Post::select('id')->orderByRaw("RAND()")->first()->id,
    ];
});


$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence(1),
    ];
});


