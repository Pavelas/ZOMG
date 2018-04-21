<?php

use App\Game;
use Faker\Generator as Faker;

$factory->define(App\Clip::class, function (Faker $faker) {
    return [
        'game_id' => Game::inRandomOrder()->first()->id,
        'title' => $faker->text($maxNbChars = 64),
        'url' => $faker->imageUrl($width = 800, $height = 450),
        'start_time' => 0,
        'end_time' => 0,
        'views' => $faker->numberBetween($min = 1000, $max = 90000),
        'rating' => $faker->numberBetween($min = 500, $max = 3000),
    ];
});
