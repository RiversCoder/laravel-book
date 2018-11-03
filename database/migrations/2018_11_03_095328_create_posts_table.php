<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->default('default post title');
            $table->string('intros')->default('This is post"s intros');
            $table->string('author',255)->default('RIVERS');
            $table->string('cover',255)->default('http://pic1.win4000.com/wallpaper/2017-12-26/5a41ab32e00f1.jpg');
            $table->string('time',255)->default('2018-11-03 17:30:28');
            $table->text('content');
            $table->integer('userId')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
