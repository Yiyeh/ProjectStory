<?php

use Illuminate\Database\Seeder;
use App\Story;

class StoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Story::class, 60)->create()->each(function(App\Story $story){
			$story->tags()->attach([
				rand(1,2),
				rand(3,4),
				5,
			]);        	
        });
    }
}
