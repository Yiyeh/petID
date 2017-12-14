<?php

use Faker\Generator as Faker;

$factory->define(App\Pet::class, function (Faker $faker) {
    return [
        'user_id' 	=> 	rand(1,29),
        'name'		=> 	$faker->name,
        'lastname1'	=>	$faker->lastName,
        'lastname2'	=>	$faker->lastName,
        'birthday'	=>	$faker->date,
        'file'		=>	$faker->imageUrl($width = 640, $height = 480, 'animals'),
        'country'	=> 	$faker->country,
        'city'		=>	$faker->city,
        'gender'	=>	$faker->randomElement(['male','female']),
        'specie'	=> 	$faker->randomElement(['Canino','Felino','Ave']),
        'owner'		=> 	$faker->name,
        'phone'		=>	$faker->e164PhoneNumber,
        'signature'	=>	rand(1,5),
        'lost'		=>	rand(0,1),
    ];
});
