<?php

use Illuminate\Database\Seeder;
use App\Segment;

class SegmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Segment::class, 400) ->create();
    }
}
