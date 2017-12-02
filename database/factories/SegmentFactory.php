<?php

use Faker\Generator as Faker;

$factory->define(App\Segment::class, function (Faker $faker) {
    return [
        
        'user_id' 	=> rand(1,30),
        'story_id'	=> rand(1,60),
        'body'		=> $faker->sentence(250),
        'votes'		=> rand(1,1000),
        'status'	=> $faker->randomElement(['PUBLISHED','DRAFT'])
    ];
});
