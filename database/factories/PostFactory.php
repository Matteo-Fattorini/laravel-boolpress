<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $count = User::all()->count();
    return [
        "title" => $faker->word(),
        "details" => $faker->words(30, true),
        "user_id" => $faker->numberBetween(1,$count)
    ];
});
