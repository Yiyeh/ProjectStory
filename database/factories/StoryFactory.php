<?php

use Faker\Generator as Faker;

$factory->define(App\Story::class, function (Faker $faker) {
    return [
    	'user_id' 	=> rand(1,30),
    	'title'		=> $faker->sentence(4),
    	'votes'		=> rand(1,1000),
    	'status'	=> $faker->randomElement(['PUBLISHED','DRAFT'])
    ];
});
