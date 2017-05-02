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
            $table->integer('tag_id')->length(10)->unsigned();
            $table->integer('post_id')->length(10)->unsigned();
        });

        Schema::table('tags_has_posts', function($table) {
            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onDelete('cascade');
        });

        Schema::table('tags_has_posts', function($table) {
            $table->foreign('post_id')
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
