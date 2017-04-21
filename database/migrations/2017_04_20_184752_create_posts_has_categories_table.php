<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsHasCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_has_categories', function (Blueprint $table) {
            $table->integer('posts_id')->unsigned();
            $table->integer('categories_id')->unsigned();


            $table->foreign('posts_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade');

            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
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
        Schema::dropIfExists('posts_has_categories');
    }
}
