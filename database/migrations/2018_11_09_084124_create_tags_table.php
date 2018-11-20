<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
            $table->boolean('validation')->default(0);
        });

        // Schema::create('article_tag', function (Blueprint $table) {
        //     $table->integer('article_id')->unsigned()->index()->nullable();
        //     $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        //     $table->integer('tag_id')->unsigned()->index()->nullable();
        //     $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
