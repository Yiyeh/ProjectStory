<?php

use Illuminate\Database\Seeder;
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

    	factory(Tag::class, 29) ->create();

    	$name = 'humor';
        Tag::create([
        	'name' => $name,
        	'slug' => str_slug($name)
        ]);

        $name = 'romance';
        Tag::create([
        	'name' => $name,
        	'slug' => str_slug($name)
        ]);

        $name = 'terror';
        Tag::create([
        	'name' => $name,
        	'slug' => str_slug($name)
        ]);

        $name = 'thriller';
        Tag::create([
        	'name' => $name,
        	'slug' => str_slug($name)
        ]);

        $name = 'ciencia ficción';
        Tag::create([
        	'name' => $name,
        	'slug' => str_slug($name)
        ]);


    }
}
