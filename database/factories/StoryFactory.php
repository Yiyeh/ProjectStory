<?php

use Faker\Generator as Faker;

$factory->define(App\Story::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
    	'user_id' 	=> rand(1,30),
    	'tag_id' 	=> rand(1,5),
    	'title'		=> $title,
    	'slug'		=> str_slug($title),
    	'intro'		=> $faker->sentence(100),
    	'votes'		=> rand(1,1000),
    	'status'	=> $faker->randomElement(['PUBLISHED','DRAFT'])
    ];
});
