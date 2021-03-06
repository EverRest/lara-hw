<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('users_id')->length(100)->unsigned()->nullable();
            $table->integer('posts_id')->length(10);
            $table->string('name')->length(100);
            $table->text('message');
            $table->timestamp('created_at')->nullable();
        });

        Schema::table('comments', function($table) {
            $table->foreign('posts_id')
                ->references('id')
                ->on('posts')
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
        Schema::dropIfExists('comments');
    }
}
