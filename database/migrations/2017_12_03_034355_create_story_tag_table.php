<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_tag', function (Blueprint $table) {

            $table->integer('story_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('story_id')
                        ->references('id')->on('stories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

            $table->foreign('tag_id')
                        ->references('id')->on('tags')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('story_tag');
    }
}
