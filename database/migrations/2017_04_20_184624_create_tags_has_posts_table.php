<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsHasPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_has_posts', function (Blueprint $table) {
            $table->integer('tags_id')->unsigned();
            $table->integer('posts_id')->unsigned();

            $table->foreign('tags_id')
                ->references('id')->on('tags')
                ->onDelete('cascade');

            $table->foreign('posts_id')
                ->references('id')->on('posts')
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
        Schema::dropIfExists('tags_has_posts');
    }
}
