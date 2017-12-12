<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('intro', 9999);
            $table->bigInteger('votes');
            $table->enum('status', ['PUBLISHED','DRAFT'])->default('DRAFT');
            $table->timestamps();

            $table->foreign('user_id')
                        ->references('id')->on('users')
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
        Schema::dropIfExists('stories');
    }
}
