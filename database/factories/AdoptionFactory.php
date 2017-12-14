<?php

use Faker\Generator as Faker;

$factory->define(App\Adoption::class, function (Faker $faker) {
    return [
        'user_id'	=>	rand(1,30),
        'title'		=>	$faker->sentence(4),
        'file'		=> 	$faker->imageUrl($width = 640, $height = 480, 'animals'),
        'country'	=>	$faker->country,
        'city'		=> 	$faker->city,
        'commune'	=>	$faker->state,
        'quanty'	=>	rand(1,8),
        'body'		=> 	$faker->sentence(20),
    ];
});
