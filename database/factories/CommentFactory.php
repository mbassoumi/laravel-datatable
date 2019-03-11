<?php

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

$factory->define(App\Comment::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $posts = App\Post::pluck('id')->toArray();

    return [
        'title' => $faker->title,
        'body' =>$faker->text,
        'details' => [
            'number' => $faker->numberBetween(0,100),
            'text' => $faker->text,
        ],
        'post_id' => $faker->randomElement($posts),
        'user_id' => $faker->randomElement($users),
    ];
});
