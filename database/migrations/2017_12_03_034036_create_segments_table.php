<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segments', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('story_id')->unsigned();
            $table->string('body', 9999);
            $table->bigInteger('votes');
            $table->enum('status', ['PUBLISHED','DRAFT','DISCARTED'])->default('DRAFT');
            $table->timestamps();

            $table->foreign('user_id')
                      ->references('id')->on('users')
                      ->onDelete('cascade');
            $table->foreign('story_id')
                      ->references('id')->on('stories')
                      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('segments');
    }
}
